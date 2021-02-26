<?php

namespace App\Form;

use App\Entity\Student;
use App\Entity\Tag;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class TagType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('description')
            ->add('students', EntityType::class, [
                // looks for choices from this entity
                'class' => Student::class,
            
                // uses the User.username property as the visible option string
                'choice_label' => 'lastname',
                // used to render a select box, check boxes or radios
                'multiple' => true,
                'expanded' => true, 
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Tag::class,
        ]);
    }
}
