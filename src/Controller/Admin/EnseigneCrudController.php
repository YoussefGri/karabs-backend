<?php

namespace App\Controller\Admin;

use App\Entity\Enseigne;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;


class EnseigneCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Enseigne::class;
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
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('nom'),
            TextField::new('numeroTelephone'),
            TextField::new('adresse'),
            TextareaField::new('description')->hideOnIndex(),
            NumberField::new('noteSeuil'),
            ArrayField::new('pointsCle')->hideOnIndex(),
            TextField::new('gpsLocation'),
            NumberField::new('notePrix'),
            NumberField::new('noteQualite'),
            NumberField::new('noteAmbiance'),
            NumberField::new('noteACM'),
            NumberField::new('nombreVotesPrix'),
            NumberField::new('nombreVotesQualite'),
            TextField::new('slogan'),
            NumberField::new('nombreVotesAmbiance'),
            AssociationField::new(propertyName: 'categories')
                ->autocomplete()
        ];
    }
    public function configureActions(Actions $actions): Actions
{
    return $actions
        ->add(Crud::PAGE_INDEX, Action::DETAIL)
        ->update(Crud::PAGE_INDEX, Action::DELETE, function (Action $action) {
            return $action->setIcon('fa fa-trash')
                ->setLabel(false)
                ->setCssClass('btn btn-danger')
                ->addCssClass('delete-action')
                ->setHtmlAttributes([
                    'onclick' => 'return confirm("Êtes-vous sûr de vouloir supprimer cette enseigne?")'
                ]);
        });
}
}