<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType; // Importez TextareaType
use Symfony\Component\Form\Extension\Core\Type\SubmitType; // Importez SubmitType
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('objet')
            ->add('email')
            ->add('message', TextareaType::class, [ // Utilisez TextareaType::class pour le champ textarea
                'label' => 'Votre message',
                'required' => false
            ])
            ->add('save', SubmitType::class, [ // Utilisez SubmitType::class pour le champ de soumission
                'label' => 'Envoyer le message'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}

