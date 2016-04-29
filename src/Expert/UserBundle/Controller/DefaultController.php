<?php

namespace Expert\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Administration\UserBundle\Form\UserType;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AdministrationUserBundle:Default:index.html.twig', array('name' => $name));
    }
    /**
     * 
     * @Template()
     * @return array()
     */
    public function signUpAction()
    {
        
        $userManager = $this->get('fos_user.user_manager');
        $user = $userManager->createUser();
        $form = $this->createForm(new UserType(), $user);
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {
                $user->setEnabled(true);
                //$user->setPlainPassword($user->getPassword());
                $userManager->updateUser($user);
                return $this->redirectToRoute('administration_acceuil_homepage');
            }
        }
        return  array('form'=>$form->createView());
    }
}
