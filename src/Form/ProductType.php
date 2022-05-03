<?php

namespace App\Form;

use App\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', options: [
                'row_attr' => [
                    'class' => 'form-group',
                ],
                'attr' => [
                    'class' => 'form-control',
                ],
                'label_attr' => [
                    'class' => 'col-form-label',
                ],
            ])
            ->add('image', options: [
                'row_attr' => [
                    'class' => 'form-group',
                ],
                'attr' => [
                    'class' => 'form-control',
                ],
                'label_attr' => [
                    'class' => 'col-form-label',
                ],
            ])
            ->add('price', options: [
                'row_attr' => [
                    'class' => 'form-group',
                ],
                'attr' => [
                    'class' => 'form-control',
                ],
                'label_attr' => [
                    'class' => 'col-form-label',
                ],
            ])
            ->add('sale', options: [
                'row_attr' => [
                    'class' => 'form-group',
                ],
                'attr' => [
                    'class' => 'form-control',
                ],
                'label_attr' => [
                    'class' => 'col-form-label',
                ],
            ])
            ->add('description', options: [
                'row_attr' => [
                    'class' => 'form-group',
                ],
                'attr' => [
                    'class' => 'form-control',
                ],
                'label_attr' => [
                    'class' => 'col-form-label',
                ],
            ])
            ->add('category', options: [
                'row_attr' => [
                    'class' => 'form-group',
                ],
                'attr' => [
                    'class' => 'form-control',
                ],
                'label_attr' => [
                    'class' => 'col-form-label',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
