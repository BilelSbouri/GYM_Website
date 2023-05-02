<?php

namespace App\Form;

use App\Entity\Contact;
use phpDocumentor\Reflection\TypeResolver;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email',EmailType::class, ['attr' => ['class' => "form-control","placeholder"=>"Adresse-email" ],'required'=>true,])
            ->add('tel',TelType::class, ['attr' => ['class' => "form-control","placeholder"=>"(+216)20200200" ],'required'=>true])
            ->add('message', TextareaType::class, ['attr' => ['class' => "form-control","placeholder"=>"Message"],'required'=>true])

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
