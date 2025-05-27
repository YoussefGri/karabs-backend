<?php

namespace App\Controller;

use App\Entity\Enseigne;
use App\Entity\Notation;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

final class EnseigneController extends AbstractController
{
    private function calculateAverage(Enseigne $enseigne, EntityManagerInterface $em): array
    {
        $conn = $em->getConnection();
        $sql = <<<SQL
            SELECT
                AVG(note_prix) AS avgPrix,
                AVG(note_qualite) AS avgQualite,
                AVG(note_ambiance) AS avgAmbiance
            FROM notation
            WHERE enseigne_id = :id
        SQL;

        $stmt = $conn->prepare($sql);
        $stmt->bindValue('id', $enseigne->getId());
        $result = $stmt->executeQuery()->fetchAssociative();

        $avgPrix = $result['avgPrix'] ?? 0;
        $avgQualite = $result['avgQualite'] ?? 0;
        $avgAmbiance = $result['avgAmbiance'] ?? 0;

        $notes = array_filter([$avgPrix, $avgQualite, $avgAmbiance], fn($n) => $n !== null);
        $moyenne = !empty($notes) ? round(array_sum($notes) / count($notes), 1) : 0.0;

        return [
            'prix' => round((float)$avgPrix, 1),
            'qualite' => round((float)$avgQualite, 1),
            'ambiance' => round((float)$avgAmbiance, 1),
            'moyenne' => $moyenne
        ];
    }

    #[Route('/api/enseignes/{id}/note-acm', name: 'enseignes_note_acm', methods: ['GET'])]
    public function getNoteAcm(int $id, EntityManagerInterface $em): JsonResponse
    {
        $enseigne = $em->getRepository(Enseigne::class)->find($id);

        if (!$enseigne) {
            throw new NotFoundHttpException('Enseigne non trouvée');
        }

        return $this->json([
            'noteACM' => [
                'prix' => $enseigne->getNotePrix(),
                'qualite' => $enseigne->getNoteQualite(),
                'ambiance' => $enseigne->getNoteAmbiance(),
            ]
        ]);
    }

    #[Route('/api/enseignes/{id}/note-moyenne', name: 'enseignes_note_moyenne', methods: ['GET'])]
    public function getNoteMoyenneFromNotation(int $id, EntityManagerInterface $em): JsonResponse
    {
        $enseigne = $em->getRepository(Enseigne::class)->find($id);

        if (!$enseigne) {
            throw new NotFoundHttpException('Enseigne non trouvée');
        }

        $notes = $this->calculateAverage($enseigne, $em);

        return $this->json([
            'notes-moyennes' => $notes,
            'moyenne' => $notes['moyenne']
        ]);
    }



    #[Route('/api/map', name: 'map_enseignes', methods: ['GET'])]
    public function getEnseignesForMap(EntityManagerInterface $em): JsonResponse
    {
        $enseignes = $em->getRepository(Enseigne::class)->findAll();

        $data = array_map(function (Enseigne $enseigne) use ($em) {
            $noteMoyenne = $this->calculateAverage($enseigne, $em)['moyenne'];
            [$lat, $lng] = [$enseigne->getLatitude(), $enseigne->getLongitude()];

            return [
                'id' => $enseigne->getId(),
                'nom' => $enseigne->getNom(),
                'noteMoyenne' => $noteMoyenne,
                'lat' => (float) $lat,
                'lng' => (float) $lng,
                'photo' => $enseigne->getPhoto()?: -1,
                'numeroTelephone' => $enseigne->getNumeroTelephone(),
                'adresse' => $enseigne->getAdresse(),
                'categories' => $enseigne->getCategories()->map(function ($categorie) {
                    return [
                        // 'id' => $categorie->getId(),
                        'nom' => $categorie->getNom(),
                        // 'image' => $categorie->getImage(),
                        'couleur' => $categorie->getCouleur()
                    ];
                })->toArray(),
            ];
        }, $enseignes);

        return $this->json($data);
    }

    #[Route('/api/enseignes/by-category/{name}', name: 'enseignes_by_category', methods: ['GET'])]
    public function getEnseignesByCategory(string $name, EntityManagerInterface $em): JsonResponse
    {
        $user = $this->getUser();
        if (!$user) {
            throw new AccessDeniedException('Non authentifié');
        }

        $repo = $em->getRepository(Enseigne::class);
        $enseignes = strtolower($name) === 'toutes'
            ? $repo->findAll()
            : $repo->createQueryBuilder('e')
                ->join('e.categories', 'c')
                ->where('c.nom = :name')
                ->setParameter('name', $name)
                ->getQuery()
                ->getResult();

        $data = array_map(function (Enseigne $enseigne) use ($em) {
            $notes = $this->calculateAverage($enseigne, $em);

            return [
                'id' => $enseigne->getId(),
                'nom' => $enseigne->getNom(),
                'adresse' => $enseigne->getAdresse(),
                'numeroTelephone' => $enseigne->getNumeroTelephone(),
                'photo' => $enseigne->getPhoto(),
                'noteMoyenne' => $notes['moyenne'],
                'slogan' => $enseigne->getSlogan(),
                // 'categorie' => $enseigne->getCategories()->first()?->getNom() ?? 'Non classé'
                'categorie' => ($cat = $enseigne->getCategories()->first())
                ? ['nom' => $cat->getNom(), 'couleur' => $cat->getCouleur()]
                : ['nom' => 'Non classé', 'couleur' => '#FF0000']
            ];
        }, $enseignes);

        return $this->json([
            'enseignes' => $data,
            'favoris' => $user->getFavorisIds()
        ]);
    }

    #[Route('/api/enseignes/random/{count}', name: 'random_enseignes', methods: ['GET'])]
    public function getRandomEnseignes(int $count, EntityManagerInterface $em): JsonResponse
    {
        $user = $this->getUser();
        if (!$user) {
            throw new AccessDeniedException('Non authentifié');
        }

        $enseignes = $em->getRepository(Enseigne::class)->findAll();
        shuffle($enseignes);
        $randomEnseignes = array_slice($enseignes, 0, min($count, count($enseignes)));

        $data = array_map(function (Enseigne $enseigne) use ($em) {
            $notes = $this->calculateAverage($enseigne, $em);

            return [
                'id' => $enseigne->getId(),
                'nom' => $enseigne->getNom(),
                'adresse' => $enseigne->getAdresse(),
                'photo' => $enseigne->getPhoto(),
                'slogan' => $enseigne->getSlogan(),
                'noteMoyenne' => $notes['moyenne'],
                'categorie' => $enseigne->getCategories()->first()?->getNom() ?? 'Non classé'
            ];
        }, $randomEnseignes);

        return $this->json(['enseignes' => $data]);
    }

    #[Route('/api/enseignes/{id}/horaires', name: 'enseignes_horaires', methods: ['GET'])]
    public function getHoraires(int $id, EntityManagerInterface $em): JsonResponse
    {
        $user = $this->getUser();
        if (!$user) {
            throw new AccessDeniedException('Non authentifié');
        }

        $enseigne = $em->getRepository(Enseigne::class)->find($id);
        if (!$enseigne) {
            throw new NotFoundHttpException('Enseigne non trouvée');
        }

        try {
            $conn = $em->getConnection();
            $sql = "SELECT id, jour, TIME_FORMAT(heure_ouverture, '%H:%i') as ouverture, 
                    TIME_FORMAT(heure_fermeture, '%H:%i') as fermeture 
                    FROM horaire 
                    WHERE enseigne_id = :enseigne_id 
                    ORDER BY FIELD(jour, 'LUNDI', 'MARDI', 'MERCREDI', 'JEUDI', 'VENDREDI', 'SAMEDI', 'DIMANCHE'),
                    heure_ouverture ASC";
            
            $stmt = $conn->prepare($sql);
            $result = $stmt->executeQuery(['enseigne_id' => $id]);
            $rawHoraires = $result->fetchAllAssociative();
            
            $horaires = array_map(function ($h) {
                return [
                    'jour' => strtoupper($h['jour']),
                    'heures' => [
                        'ouverture' => $h['ouverture'],
                        'fermeture' => $h['fermeture']
                    ]
                ];
            }, $rawHoraires);

            return $this->json(['horaires' => $horaires]);
            
        } catch (\Throwable $e) {
            error_log('Exception dans getHoraires: ' . $e->getMessage());
            
            return $this->json([
                'horaires' => [
                    ['jour' => 'LUNDI', 'heures' => ['ouverture' => '09:00', 'fermeture' => '18:00']],
                    ['jour' => 'MARDI', 'heures' => ['ouverture' => '09:00', 'fermeture' => '18:00']],
                    ['jour' => 'MERCREDI', 'heures' => ['ouverture' => '09:00', 'fermeture' => '18:00']],
                    ['jour' => 'JEUDI', 'heures' => ['ouverture' => '09:00', 'fermeture' => '18:00']],
                    ['jour' => 'VENDREDI', 'heures' => ['ouverture' => '09:00', 'fermeture' => '18:00']],
                    ['jour' => 'SAMEDI', 'heures' => ['ouverture' => '10:00', 'fermeture' => '17:00']],
                    ['jour' => 'DIMANCHE', 'heures' => ['ouverture' => '10:00', 'fermeture' => '15:00']]
                ],
                'error' => $e->getMessage()
            ], 200);
        }
    }

    #[Route('/api/enseignes/{id}', name: 'enseignes_by_id', methods: ['GET'])]
    public function getEnseigneById(int $id, EntityManagerInterface $em): JsonResponse
    {
        $user = $this->getUser();
        if (!$user) {
            throw new AccessDeniedException('Non authentifié');
        }

        $enseigne = $em->getRepository(Enseigne::class)->find($id);
        if (!$enseigne) {
            throw new NotFoundHttpException('Enseigne non trouvée');
        }

        $notes = $this->calculateAverage($enseigne, $em);

        return $this->json([
            'id' => $enseigne->getId(),
            'nom' => $enseigne->getNom(),
            'description' => $enseigne->getDescription(),
            'adresse' => $enseigne->getAdresse(),
            // 'gpsLocation' => $enseigne->getGpsLocation(),
            'latitude' => $enseigne->getLatitude(),
            'longitude' => $enseigne->getLongitude(),
            'numeroTelephone' => $enseigne->getNumeroTelephone(),
            'photo' => $enseigne->getPhoto(),
            'notePrix' => $notes['prix'],
            'noteQualite' => $notes['qualite'],
            'noteAmbiance' => $notes['ambiance'],
            'noteMoyenne' => $notes['moyenne'],
            'noteACM' => [
                'prix' => $enseigne->getNotePrix(),
                'qualite' => $enseigne->getNoteQualite(),
                'ambiance' => $enseigne->getNoteAmbiance()
            ],
            'points_cle' => $enseigne->getPointsCle(),
            'slogan' => $enseigne->getSlogan(),
            'categorie' => $enseigne->getCategories()->first()?->getNom() ?? 'Non classé'
        ]);
    }

    #[Route('/api/enseignes/{id}/rate', name: 'rate_enseigne', methods: ['POST'])]
    public function rateEnseigne(
        int $id,
        Request $request,
        EntityManagerInterface $em,
        LoggerInterface $logger
    ): JsonResponse {
        $user = $this->getUser();
        if (!$user) {
            throw new AccessDeniedException('Non authentifié');
        }

        $data = json_decode($request->getContent(), true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            return $this->json(['message' => 'JSON invalide'], 400);
        }

        foreach (['prix', 'qualite', 'ambiance'] as $key) {
            if (!isset($data[$key]) || $data[$key] < 1 || $data[$key] > 5) {
                return $this->json(['message' => "Note $key invalide (1-5)"], 400);
            }
        }

        $enseigne = $em->getRepository(Enseigne::class)->find($id);
        if (!$enseigne) {
            throw new NotFoundHttpException('Enseigne non trouvée');
        }

        $notation = $em->getRepository(Notation::class)->findOneBy([
            'user' => $user,
            'enseigne' => $enseigne
        ]);

        $isNew = $notation === null;
        if ($isNew) {
            $notation = new Notation();
            $notation
                ->setUser($user)
                ->setEnseigne($enseigne)
                ->setDateCreation(new \DateTime());
            
            $logger->info('Création d\'une nouvelle notation', [
                'user_id' => $user->getId(),
                'enseigne_id' => $enseigne->getId()
            ]);
        } else {
            $logger->info('Mise à jour d\'une notation existante', [
                'notation_id' => $notation->getId(),
                'user_id' => $user->getId(),
                'enseigne_id' => $enseigne->getId()
            ]);
        }

        $notation
            ->setNotePrix((int)$data['prix'])
            ->setNoteQualite((int)$data['qualite'])
            ->setNoteAmbiance((int)$data['ambiance'])
            ->setCommentaire($data['commentaire'] ?? null);

        $em->persist($notation);
        $em->flush();

        $notes = $this->calculateAverage($enseigne, $em);

        return $this->json([
            'message' => $isNew ? 'Évaluation créée' : 'Évaluation mise à jour',
            'notePrix' => $notes['prix'],
            'noteQualite' => $notes['qualite'],
            'noteAmbiance' => $notes['ambiance'],
            'noteMoyenne' => $notes['moyenne']
        ]);
    }
}