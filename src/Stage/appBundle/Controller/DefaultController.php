<?php

namespace Stage\appBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function shopAction()
    {
        
        
        
        return $this->render('StageappBundle:Default:index.html.twig');
    }
}
