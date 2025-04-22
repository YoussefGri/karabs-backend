<?php

namespace App\Controller\Admin;

use App\Entity\Horaire;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TimeField;
use App\Enum\JourEnum;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class HoraireCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Horaire::class;
    }

    public function configureFields(string $pageName): iterable
{
    return [
        IdField::new('id')->onlyOnIndex(),

        ChoiceField::new('jour')
            ->setChoices([
                'Lundi' => JourEnum::LUNDI,
                'Mardi' => JourEnum::MARDI,
                'Mercredi' => JourEnum::MERCREDI,
                'Jeudi' => JourEnum::JEUDI,
                'Vendredi' => JourEnum::VENDREDI,
                'Samedi' => JourEnum::SAMEDI,
                'Dimanche' => JourEnum::DIMANCHE,
            ])
            ->renderExpanded()
            ->renderAsNativeWidget(),

        TimeField::new('heureOuverture'),
        TimeField::new('heureFermeture'),

        AssociationField::new('enseigne'),
    ];
}

}