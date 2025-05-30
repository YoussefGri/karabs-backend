<?php

namespace App\Controller\Admin;

use App\Entity\User;
// Importez vos autres entités ici
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        // Vérifier si l'utilisateur est connecté et a le rôle ROLE_ADMIN
        $user = $this->getUser();
        if (!$user || !in_array('ROLE_ADMIN', $user->getRoles())) {
            return $this->redirectToRoute('admin_login');
        }
    
        // Afficher le tableau de bord
        return $this->render('admin/dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Le Krabs - Administration');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Utilisateurs', 'fas fa-users', User::class);
        // Section Enseignes
        yield MenuItem::section('Gestion Commerces');
        yield MenuItem::linkToCrud('Enseignes', 'fas fa-store', Enseigne::class)
            ->setController(EnseigneCrudController::class);
        yield MenuItem::linkToCrud('Horaires', 'far fa-clock', Horaire::class)
            ->setController(HoraireCrudController::class);
        
        // Section Evaluations
        yield MenuItem::section('Evaluations');
        yield MenuItem::linkToCrud('Notes', 'fas fa-star', Notation::class)
            ->setController(NotationCrudController::class);
        yield MenuItem::linkToCrud('Catégories', 'fas fa-tags', Categorie::class)
            ->setController(CategorieCrudController::class);
        
        // Liens utiles
        yield MenuItem::section('Navigation');

        // deconnexion
        yield MenuItem::linkToLogout('Déconnexion', 'fas fa-sign-out-alt');
        
        // Lien vers le site principal
        //yield MenuItem::linkToUrl('Retour au Karabs', 'fas fa-arrow-left', '/admin');
        yield MenuItem::linkToUrl('Retour au Karabs', 'fas fa-arrow-left', '/login');

    }
}