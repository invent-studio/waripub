<?php

namespace Waripub\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class UserType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder ->add('nom', TextType::class ,array('required'=> true))
            ->add('tel', TelType::class ,array('required'=> true))
            ->add('email',EmailType::class ,array('required'=> true))
            ->add('username', TextType::class,array('required'=> true))
            ->add('plainPassword', RepeatedType::class, array(
                'type' => PasswordType::class,
                'invalid_message' => 'Les mots de passes ne sont pas identiques',
                'options' => array('attr' => array('class' => 'form-control')),
                'required' => true,
                'first_options'  => array('label' => 'Mot de passe'),
                'second_options' => array('label' => 'Répeter le mot de passe'),
                ))
            ->add('lienfb',UrlType::class,array('required'=> false))
            ->add('lientwitter', UrlType::class,array('required'=> false))
            ->add('lieninstagram',UrlType::class,array('required'=> false))
            ->add('description',TextareaType::class ,array('required'=> false))
            ->add('roles', ChoiceType::class, array(
                    'choices'  => array(
                        'Choisissez un type de compte...' => "",
                        "Je suis souscripteur: je désire partager des publicités" => "ROLE_SOUSCRIPTEUR",
                        "Je suis partenaire: je désire poster mes publicités" => "ROLE_PRESTATAIRE",
                        "Je suis administrateur: je désire administrer " => "ROLE_ADMIN"
                    ),
                    'required'=> true ,
                    'label' => "Vous êtes:"
                    )
                )

            //Souscripteur
            ->add('nbabonnefb',IntegerType::class,array(
                'required'=> false,
                'attr' => array(
                    'min' => 0
                    )
                )
            )
            ->add('nbabonnetwitter', IntegerType::class ,array( 'required'=> false,
                    'attr' => array(
                        'min' => 0
                    )
                )
            )
            ->add('nbabonneinstagram', IntegerType::class,array( 'required'=> false,
                    'attr' => array(
                        'min' => 0
                    )
                )
            )

            //Prestataire
            ->add('rccm', TextType::class ,array('required'=> false))
            ->add('nomrepresentant',TextType::class ,array('required'=> false))
            ->add('telrepresentant', TelType::class ,array('required'=> false))
            ->add('emailrepresentant', EmailType::class ,array('required'=> false))

            ->add('save', SubmitType::class, array('label' => "S'inscrire maintenant "));
            //->add('Add', "submit")
            /*
        ->add('termsAccepted', CheckboxType::class, array(
            'mapped' => false,
            'constraints' => new IsTrue(),
            'required' => true,
            'label' => "J'ai lu et j'accepte les <a href=\"cgu\">conditions générales d'utilisation</a>"
        ))
            */
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Waripub\MainBundle\Entity\User'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'waripub_mainbundle_user';
    }


}
