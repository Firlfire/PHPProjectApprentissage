<?php

namespace DCB\ApprentissagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DCBApprentissagesBundle:Default:index.html.twig');
    }
}
