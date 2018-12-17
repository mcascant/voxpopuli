<?php

namespace App\Form;

use App\Entity\Post;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class PostFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title', TextType::class, array(
            'invalid_message' => 'Please provide a valid Title'
        ))
            ->add('text', TextType::class, array(
                'invalid_message' => 'Please provide a valid Text'
            ))
            ->add('tagList', TextType::class, array(
                'invalid_message' => 'Please provide a valid Title'
            ))
            ->add('minimumVotes', TextType::class, array(
                'invalid_message' => 'Please provide the minimum votes required'
            ))
            ->add('pubDate', IntegerType::class, array(
                'invalid_message' => 'Please provide a valid Publication Date',
                'empty_data' => '1'
            ))
            ->add('creator', IntegerType::class, array(
                'empty_data' => '1'
            ));

        if ($options['standalone']) {
            $builder->add('submit', SubmitType::class);
        }
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Post::class,
            'standalone' => false,
            'csrf_protection' => false
        ]);
    }
}
