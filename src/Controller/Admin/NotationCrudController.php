<?php
namespace App\Controller\Admin;

use App\Entity\Notation;
use App\Entity\Enseigne;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use Doctrine\ORM\EntityManagerInterface;

class NotationCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Notation::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Notation')
            ->setEntityLabelInPlural('Notations')
            ->setDefaultSort(['dateCreation' => 'DESC']);
    }

    public function configureFields(string $pageName): iterable
    {
        yield IdField::new('id')->hideOnForm();
        yield AssociationField::new('enseigne')->setRequired(true);
        yield AssociationField::new('user')->setRequired(true);
        yield NumberField::new('notePrix')->setHelp('Note de 1 à 5');
        yield NumberField::new('noteQualite')->setHelp('Note de 1 à 5');
        yield NumberField::new('noteAmbiance')->setHelp('Note de 1 à 5');
        yield TextareaField::new('commentaire')->hideOnIndex();
        yield DateTimeField::new('dateCreation')->hideOnForm();
    }

    public function updateEntity(EntityManagerInterface $entityManager, $entityInstance): void
    {
        parent::updateEntity($entityManager, $entityInstance);

        if ($entityInstance instanceof Notation) {
            $enseigne = $entityInstance->getEnseigne();
            if ($enseigne) {
                $entityManager->flush();
            }
        }
    }

    public function persistEntity(EntityManagerInterface $entityManager, $entityInstance): void
    {
        parent::persistEntity($entityManager, $entityInstance);

        if ($entityInstance instanceof Notation) {
            $enseigne = $entityInstance->getEnseigne();
            if ($enseigne) {
                $entityManager->flush();
            }
        }
    }

    public function deleteEntity(EntityManagerInterface $entityManager, $entityInstance): void
    {
        $enseigne = null;
        if ($entityInstance instanceof Notation) {
            $enseigne = $entityInstance->getEnseigne();
        }

        parent::deleteEntity($entityManager, $entityInstance);

        if ($enseigne instanceof Enseigne) {
            $entityManager->flush();
        }
    }
}