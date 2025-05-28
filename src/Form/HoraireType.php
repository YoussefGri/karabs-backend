<?php
namespace App\Form;

use App\Entity\Horaire;
use App\Enum\JourEnum;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HoraireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('jour', ChoiceType::class, [
                'choices' => [
                    'Lundi' => JourEnum::LUNDI,
                    'Mardi' => JourEnum::MARDI,
                    'Mercredi' => JourEnum::MERCREDI,
                    'Jeudi' => JourEnum::JEUDI,
                    'Vendredi' => JourEnum::VENDREDI,
                    'Samedi' => JourEnum::SAMEDI,
                    'Dimanche' => JourEnum::DIMANCHE,
                ],
                'label' => 'Jour',
            ])
            ->add('heureOuverture', TimeType::class, [
                'widget' => 'single_text',
                'label' => 'Heure d\'ouverture',
            ])
            ->add('heureFermeture', TimeType::class, [
                'widget' => 'single_text',
                'label' => 'Heure de fermeture',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Horaire::class,
        ]);
    }
}
