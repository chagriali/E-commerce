<?php

namespace Stage\appBundle\Controller;

use Stage\appBundle\GenericTemplate\Manager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class FrontController extends Controller
{


    public function indexAction(Request $request)
    {
       
        $templateManager = $this->container->get('template_getter');
        $templateManager->getTemplate();

       

        return $this->render('StageappBundle:Front:shop.html.twig');
    }


    public function detailAction($id){
        $session =  $this->get('session');

        $em = $this->getDoctrine();
        $repo = $em->getRepository("StageappBundle:User");
        $header = $repo->find(1)->getHeader();
        $footer = $repo->find(1)->getFooter();
        $session->set('h', $header);
        $session->set('f', $footer);
        $session->set('user', 1);
        $session->set('firstColor', $repo->find(1)->getColors()->getFirstColor());
        $session->set('secondColor', $repo->find(1)->getColors()->getSecondColor());


        return $this->render('StageappBundle:Front:detail.html.twig');
    }

}
