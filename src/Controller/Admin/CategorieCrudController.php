<?php

namespace App\Controller\Admin;

use App\Entity\Categorie;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\RequestStack;

class CategorieCrudController extends AbstractCrudController
{
    private EntityManagerInterface $entityManager;
    private AdminUrlGenerator $adminUrlGenerator;
    private $request;

    public function __construct(
        EntityManagerInterface $entityManager, 
        AdminUrlGenerator $adminUrlGenerator,
        RequestStack $requestStack
    ) {
        $this->entityManager = $entityManager;
        $this->adminUrlGenerator = $adminUrlGenerator;
        $this->request = $requestStack->getCurrentRequest();
    }

    public static function getEntityFqcn(): string
    {
        return Categorie::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('nom'),
            AssociationField::new('enseignes')
                ->onlyOnDetail()
        ];
    }

    public function configureActions(Actions $actions): Actions
    {
        $deleteAction = Action::new('safeDelete', 'Supprimer', 'fa fa-trash')
            ->linkToCrudAction('safeDelete')
            ->setCssClass('btn btn-danger')
            ->displayIf(static function ($entity) {
                return true;
            });

        return $actions
            ->add(Crud::PAGE_INDEX, Action::DETAIL)
            ->remove(Crud::PAGE_INDEX, Action::DELETE)
            ->add(Crud::PAGE_INDEX, $deleteAction);
    }

    public function safeDelete(): Response
    {
        $entityId = $this->request->query->get('entityId');
        
        if (!$entityId) {
            $this->addFlash('danger', 'Aucun ID de catégorie fourni');
            return $this->redirect($this->adminUrlGenerator->setAction(Action::INDEX)->generateUrl());
        }
        
        $categorie = $this->entityManager->getRepository(Categorie::class)->find($entityId);
        
        if (!$categorie) {
            $this->addFlash('danger', 'Catégorie non trouvée');
            return $this->redirect($this->adminUrlGenerator->setAction(Action::INDEX)->generateUrl());
        }
    
        try {
            // Compter les enseignes associées pour le message
            $enseignesCount = $categorie->getEnseignes()->count();
            
            // La suppression sera gérée par onPreRemove
            $this->entityManager->remove($categorie);
            $this->entityManager->flush();
    
            if ($enseignesCount > 0) {
                $this->addFlash('success', "Catégorie supprimée avec succès. $enseignesCount enseignes ont été mises à jour.");
            } else {
                $this->addFlash('success', 'Catégorie supprimée avec succès.');
            }
        } catch (\Exception $e) {
            $this->addFlash('danger', 'Erreur lors de la suppression: ' . $e->getMessage());
            error_log('Erreur suppression catégorie: ' . $e->getMessage());
            error_log('Trace: ' . $e->getTraceAsString());
        }
        
        return $this->redirect($this->adminUrlGenerator
            ->setController(self::class)
            ->setAction(Action::INDEX)
            ->generateUrl());
    }



}