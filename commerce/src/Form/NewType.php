<?php

namespace App\Form;

use App\Entity\Products;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class NewType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('name', null, array(
            'label' => false,
            'attr' => array(
                'name' => "Nom du produit"
            ),
        ))
        ->add('slug', null, array(
            'attr' => array(
                'rows' => 6
            ),
        ))

        ->add('description', null, array(
            'attr' => array(
                'rows' => 4
            ),
        ))
        ->add('price', MoneyType::class, array(
            'label' => 'Prix'
        ))
        ;
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
