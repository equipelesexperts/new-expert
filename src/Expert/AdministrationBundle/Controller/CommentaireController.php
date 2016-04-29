<?php

namespace Expert\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Expert\AdministrationBundle\Entity\Commentaire;
class CommentaireController extends Controller
{
    
    /**
     * @Template()
     * @return array()
     */
    public function addCommentAction()
    {
        $comment = new Commentaire();
        return  array();
    }
}
