<?php

namespace OrderingBundle\Form;

use OrderingBundle\Entity\CustomerDetails;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CustomerDetailsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName', TextType::class, [
                'label' => 'Voornaam',
                'trim' => true,
                'attr' => [
                    'autofocus' => 'autofocus',
                    'maxlength' => '80',
                    'class' => 'form-control'
                ],
            ])
            ->add('lastName', TextType::class, [
                'label' => 'Achternaam',
                'trim' => true,
                'attr' => [
                    'maxlength' => '150',
                    'class' => 'form-control',
                ],
            ])
            ->add('streetName', TextType::class, [
                'label' => 'Straat',
                'trim' => true,
                'attr' => [
                    'maxlength' => '120',
                    'class' => 'form-control',
                ],
            ])
            ->add('houseNumber', TextType::class, [
                'label' => 'nr',
                'trim' => true,
                'attr' => [
                    'maxlength' => '7',
                    'class' => 'form-control',
                ],
            ])
            ->add('postalCode', TextType::class, [
                'label' => 'Post code',
                'trim' => true,
                'attr' => [
                    'placeholder' => '1234 AB',
                    'maxlength' => '150',
                    'class' => 'form-control',
                ],
            ])
            ->add('city', TextType::class, [
                'label' => 'Stad',
                'trim' => true,
                'attr' => [
                    'maxlength' => '100',
                    'class' => 'form-control',
                ],
            ])
            ->add('emailAddress', EmailType::class, [
                'label' => 'Email',
                'attr' => [
                    'class' => 'form-control',
                ],
                ])
            ->add('save', SubmitType::class, [
                'label' => ' ',
                'attr' => [
                    'class' => 'panic-order-button',
                ],
            ]);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => CustomerDetails::class
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'orderingbundle_customerdetails';
    }
}
