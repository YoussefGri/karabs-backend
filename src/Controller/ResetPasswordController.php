<?php
namespace App\Controller;

use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;

final class ResetPasswordController extends AbstractController
{
    #[Route('/api/reset-password/request', name: 'api_reset_password_request', methods: ['POST'])]
    public function requestReset(
        Request $request, 
        UserRepository $userRepository, 
        MailerInterface $mailer, 
        TokenGeneratorInterface $tokenGenerator, 
        EntityManagerInterface $em
    ): JsonResponse {
        $data = json_decode($request->getContent(), true);
        $email = $data['email'] ?? null;

        if (!$email) {
            return new JsonResponse(['message' => 'Email manquant'], 400);
        }

        $user = $userRepository->findOneBy(['email' => $email]);

        if (!$user) {
            return new JsonResponse(['message' => 'Aucun utilisateur trouvé'], 404);
        }

        $token = $tokenGenerator->generateToken();
        $user->setResetToken($token);
        $user->setResetRequestedAt(new \DateTime());

        $em->flush();

        $resetUrl = $_ENV['FRONTEND_URL'] . "/reset-password/confirm?token=$token";
        
        $mail = (new Email())
            ->from($_ENV['MAILER_FROM_ADDRESS'])
            ->to($user->getEmail())
            ->subject('Le Karabs - Réinitialisation de votre mot de passe')
            ->html("
                <h2>Réinitialisation de votre mot de passe</h2>
                <p>Bonjour,</p>
                <p>Vous avez demandé la réinitialisation de votre mot de passe.</p>
                <p><a href='$resetUrl' style='background-color: #007bff; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;'>Réinitialiser mon mot de passe</a></p>
                <p>Ce lien expire dans 1 heure.</p>
                <p>Si vous n'avez pas demandé cette réinitialisation, ignorez cet email.</p>
                <p>À très prochainement !</p>
                <p>Le Karabs</p>
            ");

        try {
            $mailer->send($mail);
        } catch (\Throwable $e) {
            return new JsonResponse([
                'message' => 'Erreur lors de l\'envoi du mail',
                'error' => $e->getMessage()
            ], 500);
        }

        return new JsonResponse(['message' => 'Email envoyé'], 200);
    }

    #[Route('/api/reset-password/reset', name: 'api_reset_password_reset', methods: ['POST'])]
    public function resetPassword(
        Request $request, 
        UserRepository $userRepository, 
        UserPasswordHasherInterface $hasher, 
        EntityManagerInterface $em
    ): JsonResponse {
        $data = json_decode($request->getContent(), true);
        $token = $data['token'] ?? null;
        $newPassword = $data['password'] ?? null;

        if (!$token || !$newPassword) {
            return new JsonResponse(['message' => 'Paramètres manquants'], 400);
        }

        $user = $userRepository->findOneBy(['resetToken' => $token]);

        if (!$user) {
            return new JsonResponse(['message' => 'Token invalide'], 400);
        }

        // Vérification expiration (1 heure)
        $requestedAt = $user->getResetRequestedAt();
        if ($requestedAt && (new \DateTime())->getTimestamp() - $requestedAt->getTimestamp() > 3600) {
            return new JsonResponse(['message' => 'Lien expiré'], 410);
        }

        // Hash le nouveau mot de passe
        $hashed = $hasher->hashPassword($user, $newPassword);
        $user->setPassword($hashed);

        // Invalide le token
        $user->setResetToken(null);
        $user->setResetRequestedAt(null);

        $em->flush();

        return new JsonResponse(['message' => 'Mot de passe mis à jour']);
    }
}