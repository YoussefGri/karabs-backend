<?php

namespace App\Controller;

use App\Entity\Enseigne;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;


final class EnseigneController extends AbstractController
{

    #[Route('/api/enseignes/by-category/{name}', name: 'enseignes_by_category', methods: ['GET'])]
public function getEnseignesByCategory(string $name, EntityManagerInterface $em): JsonResponse
{
    $user = $this->getUser();


    if (!$user) {
        return $this->json(['message' => 'Non authentifié'], 401);
    }

    $repository = $em->getRepository(Enseigne::class);

    if (strtolower($name) === 'toutes') {
        $enseignes = $repository->findAll();
    } else {
        $enseignes = $repository->createQueryBuilder('e')
            ->join('e.categories', 'c')
            ->where('c.nom = :name')
            ->setParameter('name', $name)
            ->getQuery()
            ->getResult();
    }

    $data = array_map(function (Enseigne $e) use ($em) {
        $noteMoyenne = (
            $e->getNotePrix() +
            $e->getNoteQualite() +
            $e->getNoteAmbiance()
        ) / 3;
        

        return [
            'id' => $e->getId(),
            'nom' => $e->getNom(),
            'description' => $e->getDescription(),
            'adresse' => $e->getAdresse(),
            'numeroTelephone' => $e->getNumeroTelephone(),
            'photo' => $e->getPhoto(),
            'noteMoyenne' => round($noteMoyenne, 1),
            'points_cle' => $e->getPointsCle(),
            'notePrix' => $e->getNotePrix(),
            'noteQualite' => $e->getNoteQualite(),
            'noteAmbiance' => $e->getNoteAmbiance(),
            'noteACM' => $e->getNoteACM(),
            'slogan' => $e->getSlogan(),
            'categorie' => $e->getCategories()->first() ? $e->getCategories()->first()->getNom() : 'Non classé'

        ];
    }, $enseignes);

    return $this->json([
        'enseignes' => $data,
        'favoris' => $user->getFavorisIds()
    ]);
}


#[Route('/api/map', name: 'map_enseignes', methods: ['GET'])]
public function getEnseignesForMap(EntityManagerInterface $em): JsonResponse
{
    $enseignes = $em->getRepository(Enseigne::class)->findAll();

    $data = array_map(function (Enseigne $e) use ($em) {
        $noteMoyenne = $em->createQueryBuilder()
            ->select('AVG(n.note)')
            ->from('App\Entity\Notation', 'n')
            ->where('n.enseigne = :enseigne')
            ->setParameter('enseigne', $e)
            ->getQuery()
            ->getSingleScalarResult();

        // Extraire latitude / longitude depuis gps_location
        [$lat, $lng] = explode(',', $e->getGpsLocation());

        return [
            'id' => $e->getId(),
            'nom' => $e->getNom(),
            'noteMoyenne' => round((float) $noteMoyenne, 1),
            'lat' => (float) $lat,
            'lng' => (float) $lng,
            'photo' => $e->getPhoto(),
            'numeroTelephone' => $e->getNumeroTelephone(),
            'adresse' => $e->getAdresse(),
            'categories'=> $e->getCategories()->map(function ($c) {
                return [
                    'id' => $c->getId(),
                    'nom' => $c->getNom()
                ];
            })->toArray(),
        ];
    }, $enseignes);

    return $this->json($data);
}


#[Route('/api/enseignes/random/{count}', name: 'random_enseignes', methods: ['GET'])]
public function getRandomEnseignes(int $count, EntityManagerInterface $em): JsonResponse
{
    $user = $this->getUser();
    if (!$user) {
        return $this->json(['message' => 'Non authentifié'], 401);
    }

    $enseignes = $em->getRepository(Enseigne::class)->findAll();
    shuffle($enseignes);
    $randomEnseignes = array_slice($enseignes, 0, $count);

    $data = array_map(function (Enseigne $e) use ($em) {
        $noteMoyenne = (
            $e->getNotePrix() +
            $e->getNoteQualite() +
            $e->getNoteAmbiance()
        ) / 3;
        

        return [
            'id' => $e->getId(),
            'nom' => $e->getNom(),
            //'description' => $e->getDescription(),
            'adresse' => $e->getAdresse(),
            'photo' => $e->getPhoto(),
            'noteACM' => $e->getNoteACM(),
            'slogan' => $e->getSlogan(),
            'noteMoyenne' => round($noteMoyenne, 1),
            'categorie' => $e->getCategories()->first() ? $e->getCategories()->first()->getNom() : 'Non classé'
        ];
    }, $randomEnseignes);

    return $this->json([
        'enseignes' => $data
    ]);
}

#[Route('/api/enseignes/{id}/horaires', name: 'enseignes_horaires', methods: ['GET'])]
public function getHoraires(int $id, EntityManagerInterface $em): JsonResponse
{
    $user = $this->getUser();
    if (!$user) {
        return $this->json(['message' => 'Non authentifié'], 401);
    }

    $enseigne = $em->getRepository(Enseigne::class)->find($id);
    if (!$enseigne) {
        return $this->json(['message' => 'Enseigne non trouvée'], 404);
    }
    
    $horaires = [];
    $rawHoraires = [];
    
    try {
        $conn = $em->getConnection();
        $sql = "SELECT id, jour, TIME_FORMAT(heure_ouverture, '%H:%i') as ouverture, 
                TIME_FORMAT(heure_fermeture, '%H:%i') as fermeture 
                FROM horaire WHERE enseigne_id = :enseigne_id 
                ORDER BY FIELD(jour, 'LUNDI', 'MARDI', 'MERCREDI', 'JEUDI', 'VENDREDI', 'SAMEDI', 'DIMANCHE'),
                heure_ouverture ASC";
        
        $stmt = $conn->prepare($sql);
        $result = $stmt->executeQuery(['enseigne_id' => $id]);
        $rawHoraires = $result->fetchAllAssociative();
        
        foreach ($rawHoraires as $h) {
            $jour = strtoupper($h['jour']);
            $horaires[] = [
                'jour' => $jour,
                'heures' => [
                    'ouverture' => $h['ouverture'],
                    'fermeture' => $h['fermeture']
                ]
            ];
        }
        
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
        return $this->json(['message' => 'Non authentifié'], 401);
    }

    $enseigne = $em->getRepository(Enseigne::class)->find($id);

    if (!$enseigne) {
        return $this->json(['message' => 'Enseigne non trouvée'], 404);
    }

    $noteMoyenne = (
        $enseigne->getNotePrix() +
        $enseigne->getNoteQualite() +
        $enseigne->getNoteAmbiance()
    ) / 3;

    return $this->json([
        'id' => $enseigne->getId(),
        'nom' => $enseigne->getNom(),
        'description' => $enseigne->getDescription(),
        'adresse' => $enseigne->getAdresse(),
        'gpsLocation' => $enseigne->getGpsLocation() . ',' . $enseigne->getGpsLocation(),
        'numeroTelephone' => $enseigne->getNumeroTelephone(),
        'photo' => $enseigne->getPhoto(),
        'noteMoyenne' => round($noteMoyenne, 1),
        'notePrix' => $enseigne->getNotePrix(),
        'noteQualite' => $enseigne->getNoteQualite(),
        'noteAmbiance' => $enseigne->getNoteAmbiance(),
        'slogan' => $enseigne->getSlogan(),
        'points_cle' => $enseigne->getPointsCle(),
        'noteACM' => $enseigne->getNoteACM(),
        'categorie' => $enseigne->getCategories()->first()?->getNom() ?? 'Non classé'
    ]);
}



 #[Route('/api/enseignes/{id}/rate', name: 'rate_enseigne', methods: ['POST'])]
public function rateEnseigne(int $id, Request $request, EntityManagerInterface $em): JsonResponse
{
    $user = $this->getUser();
    if (!$user) {
        return $this->json(['message' => 'Non authentifié'], 401);
    }

    try {
        $data = json_decode($request->getContent(), true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new \Exception('Invalid JSON data');
        }

        $category = $data['category'] ?? null;
        $rating = $data['rating'] ?? null;

        if (!$category || !$rating || !in_array($category, ['prix', 'qualite', 'ambiance']) || $rating < 1 || $rating > 5) {
            return $this->json(['message' => 'Données de notation invalides'], 400);
        }

        $enseigne = $em->getRepository(Enseigne::class)->find($id);
        if (!$enseigne) {
            return $this->json(['message' => 'Enseigne non trouvée'], 404);
        }

        switch ($category) {
            case 'prix':
                $nbVotes = $enseigne->getNombreVotesPrix() ?? 0;
                $totalPoints = ($enseigne->getNotePrix() ?? 0) * $nbVotes;
                $nbVotes++;
                $nouvelleNote = ($totalPoints + $rating) / $nbVotes;
                $enseigne->setNotePrix($nouvelleNote);
                $enseigne->setNombreVotesPrix($nbVotes);
                break;
            case 'qualite':
                $nbVotes = $enseigne->getNombreVotesQualite() ?? 0;
                $totalPoints = ($enseigne->getNoteQualite() ?? 0) * $nbVotes;
                $nbVotes++;
                $nouvelleNote = ($totalPoints + $rating) / $nbVotes;
                $enseigne->setNoteQualite($nouvelleNote);
                $enseigne->setNombreVotesQualite($nbVotes);
                break;
            case 'ambiance':
                $nbVotes = $enseigne->getNombreVotesAmbiance() ?? 0;
                $totalPoints = ($enseigne->getNoteAmbiance() ?? 0) * $nbVotes;
                $nbVotes++;
                $nouvelleNote = ($totalPoints + $rating) / $nbVotes;
                $enseigne->setNoteAmbiance($nouvelleNote);
                $enseigne->setNombreVotesAmbiance($nbVotes);
                break;
        }

        $em->flush();

        $notePrix = $enseigne->getNotePrix();
        $noteQualite = $enseigne->getNoteQualite();
        $noteAmbiance = $enseigne->getNoteAmbiance();

        $totalNotes = 0;
        $nombreNotes = 0;

        if ($notePrix !== null) {
            $totalNotes += $notePrix;
            $nombreNotes++;
        }

        if ($noteQualite !== null) {
            $totalNotes += $noteQualite;
            $nombreNotes++;
        }

        if ($noteAmbiance !== null) {
            $totalNotes += $noteAmbiance;
            $nombreNotes++;
        }

        $noteMoyenne = ($nombreNotes > 0) ? ($totalNotes / $nombreNotes) : null;

        return $this->json([
            'message' => 'Avis enregistré',
            'notePrix' => $enseigne->getNotePrix(),
            'noteQualite' => $enseigne->getNoteQualite(),
            'noteAmbiance' => $enseigne->getNoteAmbiance(),
            'noteMoyenne' => round($noteMoyenne, 1)
        ]);

    } catch (\Exception $e) {
        return $this->json(['message' => 'Erreur lors de la notation: ' . $e->getMessage()], 500);
    }
}


}


/*
final class EnseigneController extends AbstractController
{

    #[Route('/api/enseignes/by-category/{name}', name: 'enseignes_by_category', methods: ['GET'])]
public function getEnseignesByCategory(string $name, EntityManagerInterface $em): JsonResponse
{
    $user = $this->getUser();


    if (!$user) {
        return $this->json(['message' => 'Non authentifié'], 401);
    }

    $repository = $em->getRepository(Enseigne::class);

    if (strtolower($name) === 'toutes') {
        $enseignes = $repository->findAll();
    } else {
        $enseignes = $repository->createQueryBuilder('e')
            ->join('e.categories', 'c')
            ->where('c.nom = :name')
            ->setParameter('name', $name)
            ->getQuery()
            ->getResult();
    }

    $data = array_map(function (Enseigne $e) use ($em) {
        $noteMoyenne = $em->createQueryBuilder()
            ->select('AVG(n.note)')
            ->from('App\Entity\Notation', 'n')
            ->where('n.enseigne = :enseigne')
            ->setParameter('enseigne', $e)
            ->getQuery()
            ->getSingleScalarResult();

        return [
            'id' => $e->getId(),
            'nom' => $e->getNom(),
            'description' => $e->getDescription(),
            'adresse' => $e->getAdresse(),
            'numeroTelephone' => $e->getNumeroTelephone(),
            'photo' => $e->getPhoto(),
            'noteMoyenne' => round((float) $noteMoyenne, 1)
        ];
    }, $enseignes);

    // return $this->json(['message' => 'Non autorisé'], 401);

    return $this->json([
        'enseignes' => $data,
        'favoris' => $user->getFavorisIds()
    ]);
}

#[Route('/api/map', name: 'map_enseignes', methods: ['GET'])]
public function getEnseignesForMap(EntityManagerInterface $em): JsonResponse
{
    $enseignes = $em->getRepository(Enseigne::class)->findAll();

    $data = array_map(function (Enseigne $e) use ($em) {
        $noteMoyenne = $em->createQueryBuilder()
            ->select('AVG(n.note)')
            ->from('App\Entity\Notation', 'n')
            ->where('n.enseigne = :enseigne')
            ->setParameter('enseigne', $e)
            ->getQuery()
            ->getSingleScalarResult();

        // Extraire latitude / longitude depuis gps_location
        [$lat, $lng] = explode(',', $e->getGpsLocation());

        return [
            'id' => $e->getId(),
            'nom' => $e->getNom(),
            'noteMoyenne' => round((float) $noteMoyenne, 1),
            'lat' => (float) $lat,
            'lng' => (float) $lng,
            'photo' => $e->getPhoto(),
            'numeroTelephone' => $e->getNumeroTelephone(),
            'adresse' => $e->getAdresse(),
            'categories'=> $e->getCategories()->map(function ($c) {
                return [
                    'id' => $c->getId(),
                    'nom' => $c->getNom()
                ];
            })->toArray(),
        ];
    }, $enseignes);

    return $this->json($data);
}

#[Route('/api/enseignes/random/{count}', name: 'random_enseignes', methods: ['GET'])]
public function getRandomEnseignes(int $count, EntityManagerInterface $em): JsonResponse
{
    $user = $this->getUser();
    if (!$user) {
        return $this->json(['message' => 'Non authentifié'], 401);
    }

    $enseignes = $em->getRepository(Enseigne::class)->findAll();
    shuffle($enseignes);
    $randomEnseignes = array_slice($enseignes, 0, $count);

    $data = array_map(function (Enseigne $e) use ($em) {
        $noteMoyenne = (
            $e->getNotePrix() +
            $e->getNoteQualite() +
            $e->getNoteAmbiance()
        ) / 3;
        

        return [
            'id' => $e->getId(),
            'nom' => $e->getNom(),
            'description' => $e->getDescription(),
            'adresse' => $e->getAdresse(),
            'photo' => $e->getPhoto(),
            'noteACM' => $e->getNoteACM(),
            'noteMoyenne' => round($noteMoyenne, 1),
            'categorie' => $e->getCategories()->first() ? $e->getCategories()->first()->getNom() : 'Non classé'
        ];
    }, $randomEnseignes);

    return $this->json([
        'enseignes' => $data
    ]);
}

#[Route('/api/enseignes/{id}/horaires', name: 'enseignes_horaires', methods: ['GET'])]
public function getHoraires(int $id, EntityManagerInterface $em): JsonResponse
{
    $user = $this->getUser();
    if (!$user) {
        return $this->json(['message' => 'Non authentifié'], 401);
    }

    $enseigne = $em->getRepository(Enseigne::class)->find($id);

    if (!$enseigne) {
        return $this->json(['message' => 'Enseigne non trouvée'], 404);
    }

    try {
        $horaires = [];
        foreach ($enseigne->getHoraires() as $horaire) {
            // Récupérer la valeur du jour comme une chaîne, sans dépendre de l'enum
            $jourStr = is_object($horaire->getJour()) ? (string)$horaire->getJour()->value : (string)$horaire->getJour();
            
            $horaires[] = [
                'jour' => $jourStr,
                'heures' => [
                    'ouverture' => $horaire->getHeureOuverture()->format('H:i'),
                    'fermeture' => $horaire->getHeureFermeture()->format('H:i')
                ]
            ];
        }

        return $this->json(['data' => $horaires]);
    } catch (\Exception $e) {
        // Log l'erreur pour le débogage
        error_log('Erreur dans getHoraires: ' . $e->getMessage());
        return $this->json(['message' => 'Erreur lors de la récupération des horaires', 'error' => $e->getMessage()], 500);
    }
}




#[Route('/api/enseignes/{id}', name: 'enseignes_by_id', methods: ['GET'])]
public function getEnseigneById(int $id, EntityManagerInterface $em): JsonResponse
{
    $user = $this->getUser();

    if (!$user) {
        return $this->json(['message' => 'Non authentifié'], 401);
    }

    $enseigne = $em->getRepository(Enseigne::class)->find($id);

    if (!$enseigne) {
        return $this->json(['message' => 'Enseigne non trouvée'], 404);
    }

    $noteMoyenne = (
        $enseigne->getNotePrix() +
        $enseigne->getNoteQualite() +
        $enseigne->getNoteAmbiance()
    ) / 3;

    return $this->json([
        'id' => $enseigne->getId(),
        'nom' => $enseigne->getNom(),
        'description' => $enseigne->getDescription(),
        'adresse' => $enseigne->getAdresse(),
        'gpsLocation' => $enseigne->getGpsLocation() . ',' . $enseigne->getGpsLocation(),
        'numeroTelephone' => $enseigne->getNumeroTelephone(),
        'photo' => $enseigne->getPhoto(),
        'noteMoyenne' => round($noteMoyenne, 1),
        'notePrix' => $enseigne->getNotePrix(),
        'noteQualite' => $enseigne->getNoteQualite(),
        'noteAmbiance' => $enseigne->getNoteAmbiance(),
        'noteACM' => $enseigne->getNoteACM(),
        'categorie' => $enseigne->getCategories()->first()?->getNom() ?? 'Non classé'
    ]);
}



 #[Route('/api/enseignes/{id}/rate', name: 'rate_enseigne', methods: ['POST'])]
public function rateEnseigne(int $id, Request $request, EntityManagerInterface $em): JsonResponse
{
    $user = $this->getUser();
    if (!$user) {
        return $this->json(['message' => 'Non authentifié'], 401);
    }

    try {
        $data = json_decode($request->getContent(), true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new \Exception('Invalid JSON data');
        }

        $category = $data['category'] ?? null;
        $rating = $data['rating'] ?? null;

        if (!$category || !$rating || !in_array($category, ['prix', 'qualite', 'ambiance']) || $rating < 1 || $rating > 5) {
            return $this->json(['message' => 'Données de notation invalides'], 400);
        }

        $enseigne = $em->getRepository(Enseigne::class)->find($id);
        if (!$enseigne) {
            return $this->json(['message' => 'Enseigne non trouvée'], 404);
        }

        // Mise à jour des notes avec un système de pondération
        switch ($category) {
            case 'prix':
                $nbVotes = $enseigne->getNombreVotesPrix() ?? 0;
                $totalPoints = ($enseigne->getNotePrix() ?? 0) * $nbVotes;
                $nbVotes++;
                $nouvelleNote = ($totalPoints + $rating) / $nbVotes;
                $enseigne->setNotePrix($nouvelleNote);
                $enseigne->setNombreVotesPrix($nbVotes);
                break;
            case 'qualite':
                $nbVotes = $enseigne->getNombreVotesQualite() ?? 0;
                $totalPoints = ($enseigne->getNoteQualite() ?? 0) * $nbVotes;
                $nbVotes++;
                $nouvelleNote = ($totalPoints + $rating) / $nbVotes;
                $enseigne->setNoteQualite($nouvelleNote);
                $enseigne->setNombreVotesQualite($nbVotes);
                break;
            case 'ambiance':
                $nbVotes = $enseigne->getNombreVotesAmbiance() ?? 0;
                $totalPoints = ($enseigne->getNoteAmbiance() ?? 0) * $nbVotes;
                $nbVotes++;
                $nouvelleNote = ($totalPoints + $rating) / $nbVotes;
                $enseigne->setNoteAmbiance($nouvelleNote);
                $enseigne->setNombreVotesAmbiance($nbVotes);
                break;
        }

        $em->flush();

        // Calcul de la note moyenne globale
        $notePrix = $enseigne->getNotePrix();
        $noteQualite = $enseigne->getNoteQualite();
        $noteAmbiance = $enseigne->getNoteAmbiance();

        $totalNotes = 0;
        $nombreNotes = 0;

        if ($notePrix !== null) {
            $totalNotes += $notePrix;
            $nombreNotes++;
        }

        if ($noteQualite !== null) {
            $totalNotes += $noteQualite;
            $nombreNotes++;
        }

        if ($noteAmbiance !== null) {
            $totalNotes += $noteAmbiance;
            $nombreNotes++;
        }

        $noteMoyenne = ($nombreNotes > 0) ? ($totalNotes / $nombreNotes) : null;

        return $this->json([
            'message' => 'Avis enregistré',
            'notePrix' => $enseigne->getNotePrix(),
            'noteQualite' => $enseigne->getNoteQualite(),
            'noteAmbiance' => $enseigne->getNoteAmbiance(),
            'noteMoyenne' => round($noteMoyenne, 1)
        ]);

    } catch (\Exception $e) {
        return $this->json(['message' => 'Erreur lors de la notation: ' . $e->getMessage()], 500);
    }
}




}
*/