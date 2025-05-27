<?php

namespace App\Controller\Admin;

use App\Entity\Enseigne;
use App\Entity\Notation;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Event\AfterEntityPersistedEvent;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityDeletedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Security\Core\Security;

class EnseigneCrudController extends AbstractCrudController //implements EventSubscriberInterface
{
    private EntityManagerInterface $entityManager;
    private Security $security;

    public function __construct(EntityManagerInterface $entityManager, Security $security)
    {
        $this->entityManager = $entityManager;
        $this->security = $security;

    }

    public static function getEntityFqcn(): string
    {
        return Enseigne::class;
    }

    public static function getSubscribedEvents(): array
    {
        return [
            AfterEntityPersistedEvent::class => ['afterEnseignePersist'],
            BeforeEntityDeletedEvent::class => ['beforeEnseigneDelete'],
        ];
    }

    public function afterEnseignePersist(AfterEntityPersistedEvent $event): void
    {
        $entity = $event->getEntityInstance();

        if (!($entity instanceof Enseigne)) {
            return;
        }

        // Création d'une notation admin lors de la création de l'enseigne
        $notation = new Notation();
        $notation->setEnseigne($entity)
                ->setNotePrix($entity->getNotePrix())
                ->setNoteQualite($entity->getNoteQualite())
                ->setNoteAmbiance($entity->getNoteAmbiance())
                ->setDateCreation(new \DateTime())
                ->setUser($this->security->getUser());


        $this->entityManager->persist($notation);
        $this->entityManager->flush();
    }

    public function beforeEnseigneDelete(BeforeEntityDeletedEvent $event): void
    {
        $entity = $event->getEntityInstance();

        if (!($entity instanceof Enseigne)) {
            return;
        }

        // Suppression de toutes les notations liées à l'enseigne
        $notations = $this->entityManager->getRepository(Notation::class)
            ->findBy(['enseigne' => $entity]);

        foreach ($notations as $notation) {
            $this->entityManager->remove($notation);
        }

        $this->entityManager->flush();
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Enseigne')
            ->setEntityLabelInPlural('Enseignes')
            ->setSearchFields(['nom', 'adresse', 'description'])
            ->setDefaultSort(['nom' => 'ASC']);
    }

    public function configureFields(string $pageName): iterable
    {
        $fields = [
            IdField::new('id')->hideOnForm(),
            TextField::new('nom'),
            TextField::new('slogan')->onlyOnIndex(),
            TextField::new('numeroTelephone'),
            TextField::new('adresse'),
            NumberField::new('latitude')->setHelp('Latitude')->hideOnIndex(),
            NumberField::new('longitude')->setHelp('Longitude')->hideOnIndex(),
            // TextField::new('gpsLocation'),
            UrlField::new('website')->hideOnIndex(),
            TextareaField::new('description')->hideOnIndex(),
            // NumberField::new('noteSeuil'),
            ArrayField::new('pointsCle')->hideOnIndex(),
            AssociationField::new('categories')->autocomplete(),
            CollectionField::new('horaires')->onlyOnDetail()->setTemplatePath('admin/fields/horaires.html.twig'),
            CollectionField::new('notations')->onlyOnDetail(),
            AssociationField::new('favoris')->onlyOnDetail(),
            UrlField::new('photo', 'Lien de l’image')->setHelp('Lien vers une image')->hideOnIndex(),

        ];

        if (in_array($pageName, [Crud::PAGE_NEW, Crud::PAGE_EDIT], true)) {
            $fields[] = NumberField::new('notePrix')
                ->setHelp('Note initiale prix (1-5)');
            $fields[] = NumberField::new('noteQualite')
                ->setHelp('Note initiale qualité (1-5)');
            $fields[] = NumberField::new('noteAmbiance')
                ->setHelp('Note initiale ambiance (1-5)');
            // $fields[] = NumberField::new('noteACM');
        } else {
            // $fields[] = NumberField::new('nombreVotesPrix')->onlyOnIndex();
            // $fields[] = NumberField::new('nombreVotesQualite')->onlyOnIndex();
            // $fields[] = NumberField::new('nombreVotesAmbiance')->onlyOnIndex();
            $fields[] = NumberField::new('notePrix')->onlyOnIndex();
            $fields[] = NumberField::new('noteQualite')->onlyOnIndex();
            $fields[] = NumberField::new('noteAmbiance')->onlyOnIndex();
            // $fields[] = NumberField::new('noteACM')->onlyOnIndex();
            // $fields[] = NumberField::new(propertyName: 'noteMoyenne', 'Note moyenne')
                // ->onlyOnIndex()
                // ->setSortable(false);
        }

        return $fields;
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->add(Crud::PAGE_INDEX, Action::DETAIL)
            ->update(Crud::PAGE_INDEX, Action::DELETE, function (Action $action) {
                return $action
                    ->setIcon('fa fa-trash')
                    ->setLabel(false)
                    ->setCssClass('btn btn-danger')
                    ->addCssClass('delete-action');
                    // ->setHtmlAttributes([
                    //     'onclick' => 'return confirm("Êtes-vous sûr de vouloir supprimer cette enseigne?")'
                    // ]);
            });
    }
}