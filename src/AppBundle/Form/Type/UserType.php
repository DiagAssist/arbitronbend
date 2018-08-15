<?php
namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('email', EmailType::class);
        $builder->add('plainPassword'); // Rajout du mot de passe
        $builder->add('nom');
        $builder->add('prenom');
        $builder->add('nomOrganisation');
        $builder->add('tel');
        $builder->add('telPro');
        $builder->add('emailPro');
        $builder->add('aproposArbitre');
        $builder->add('cvArbitre');
        $builder->add('idPriv');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'AppBundle\Entity\User',
            'csrf_protection' => false
        ]);
    }
}

/*$builder->add('pass');*/
