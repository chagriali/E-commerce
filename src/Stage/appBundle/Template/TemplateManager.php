<?php

namespace Stage\appBundle\Template;



class TemplateManager
{
    private $em;
    private $session;

    public function __construct($em,$session){
        $this->$em = $em;
        $this->$session = $session;
    }

    public function getTemplate(){


            $repo = $em->getRepository("StageappBundle:Admin");
            $header = $repo->find(1)->getHeader();
            $footer = $repo->find(1)->getFooter();
            $session->set('h', $header);
            $session->set('f', $footer);
            $session->set('user', 1);
            $session->set('firstColor', $repo->find(1)->getColors()->getFirstColor());
            $session->set('secondColor', $repo->find(1)->getColors()->getSecondColor());

    }
}
