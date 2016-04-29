<?php

namespace Expert\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
 public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('username', 'text', array(
                    'required' => true,
                    'label' => 'Login',
                ))
                ->add('email', 'email', array('required' => true))
                ->add('password', 'repeated', array(
                    'type' => 'password',
                    'first_options' => array('label' => 'Saisir votre mot de passe'),
                    'second_options' => array('label' => 'Confirmer votre mot de passe'),
                    'invalid_message' => '',
                ))
                ->add('enabled', null, array(
                    'required' => false,
                    'label' => 'Activé',
                ))
                ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Administration\UserBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'administration_userbundle_user';
    }
}
