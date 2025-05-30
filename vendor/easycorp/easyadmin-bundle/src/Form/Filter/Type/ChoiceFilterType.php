<?php

namespace EasyCorp\Bundle\EasyAdminBundle\Form\Filter\Type;

use EasyCorp\Bundle\EasyAdminBundle\Form\Type\ComparisonType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 */
class ChoiceFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $multiple = (bool) $builder->get('value')->getOption('multiple');

        // if the filter shows the values as checkboxes or radio buttons, remove the
        // attribute that turns the <select> into an autocomplete widget
        if (true === ($options['value_type_options']['expanded'] ?? false)) {
            unset($options['value_type_options']['attr']['data-ea-widget']);
        }

        $builder->addModelTransformer(new CallbackTransformer(
            static fn ($data) => $data,
            static function ($data) use ($multiple) {
                // symfony form will cut off invalid values, so make sure no warnings will be thrown out:
                $data['value'] ??= null;

                switch ($data['comparison']) {
                    case ComparisonType::EQ:
                        if (null === $data['value'] || ($multiple && 0 === \count($data['value']))) {
                            $data['comparison'] = 'IS NULL';
                        } else {
                            $data['comparison'] = $multiple ? 'IN' : '=';
                        }
                        break;
                    case ComparisonType::NEQ:
                        if (null === $data['value'] || ($multiple && 0 === \count($data['value']))) {
                            $data['comparison'] = 'IS NOT NULL';
                        } else {
                            $data['comparison'] = $multiple ? 'NOT IN' : '!=';
                        }
                        break;
                }

                return $data;
            }
        ));
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'comparison_type_options' => ['type' => 'choice'],
            'value_type' => ChoiceType::class,
            'value_type_options' => [
                'multiple' => false,
                'attr' => [
                    'data-ea-widget' => 'ea-autocomplete',
                ],
            ],
        ]);
        $resolver->setNormalizer('value_type_options', static function (Options $options, $value) {
            if (!isset($value['attr'])) {
                $value['attr']['data-ea-widget'] = 'ea-autocomplete';
            }

            return $value;
        });
    }

    public function getParent(): string
    {
        return ComparisonFilterType::class;
    }
}
