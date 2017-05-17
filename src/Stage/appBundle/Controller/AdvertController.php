<?php


namespace Stage\appBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class AdvertController extends Controller
{

    public function indexAction($id){

        $session =  $this->get('session');

            $em = $this->getDoctrine();
            $repo = $em->getRepository("StageappBundle:User");
            $header = $repo->find($id)->getHeader();
            $footer = $repo->find($id)->getFooter();
            $session->set('h', $header);
            $session->set('f', $footer);
            $session->set('user', $id);
            $session->set('firstColor', $repo->find($id)->getColors()->getFirstColor());
            $session->set('secondColor', $repo->find($id)->getColors()->getSecondColor());


        return $this->render("StageappBundle:Default:index.html.twig");
    }



    public function getAjaxContentAction($id)
    {
        return $this->render("StageappBundle:Headers:h".$id.".html.twig");
    }

    public function getAjaxFooterContentAction($id)
    {
        if($id == 1)
            return $this->render("StageappBundle:Footers:f1.html.twig");
        else
            return $this->render("StageappBundle:Footers:f2.html.twig");
    }
    
}