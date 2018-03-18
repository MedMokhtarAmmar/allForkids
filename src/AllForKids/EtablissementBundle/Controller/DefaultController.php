<?php

namespace AllForKids\EtablissementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AllForKidsEtablissementBundle:Default:index.html.twig');
    }


    public function homeAction()
    {
        $user=$this->getUser();
        return $this->render('AllForKidsEtablissementBundle:Default:home.html.twig',array("user"=>$user));
    }
}
