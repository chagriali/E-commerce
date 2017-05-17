<?php
/**
 * Created by PhpStorm.
 * User: chagr
 * Date: 17/05/2017
 * Time: 10:09
 */

namespace Stage\appBundle\GenericTemplate;

class Manager
{
    private $em;
    private $session;

    public function __construct($em,$session){
        $this->em = $em;
        $this->session = $session;
    }

    public function getTemplate(){


        $repo = $this->em->getRepository("StageappBundle:Admin");
        $header = $repo->find(1)->getHeader();
        $footer = $repo->find(1)->getFooter();
        $this->session->set('h', $header);
        $this->session->set('f', $footer);
        $this->session->set('user', 1);
        $this->session->set('firstColor', $repo->find(1)->getColors()->getFirstColor());
        $this->session->set('secondColor', $repo->find(1)->getColors()->getSecondColor());
        $repoLangue = $this->em->getRepository("StageappBundle:Langue");
        $langues = $repoLangue->findAll();
        $this->session->set('langues', $langues);
        $repoHead= $this->em->getRepository("StageappBundle:Header");
        $headers = $repoHead->findAll();
        $this->session->set('headers', $headers);
        
        
    }
}
