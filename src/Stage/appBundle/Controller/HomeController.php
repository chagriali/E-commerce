<?php


namespace Stage\appBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Stage\appBundle\Entity\User;
use Stage\appBundle\Entity\Header;



class HomeController extends Controller
{

    public function homeAction(){



        return $this->render("StageappBundle:Home:home.html.twig");
    }


    public function saveAction($header,$footer,$firstColor,$secondColor){


        $em = $this->getDoctrine()->getManager();;
        $session =  $this->get('session');


        $repoUser = $em->getRepository("StageappBundle:Admin");
        $repoHeader = $em->getRepository("StageappBundle:Header");
        $repoFooter = $em->getRepository("StageappBundle:Footer");
        $repoColors= $em->getRepository("StageappBundle:Colors");

        $user = $repoUser->find(1);
        $head = $repoHeader->find($header);
        $footer = $repoFooter->find($footer);
        $colors = $user->getColors();
        $colors->setFirstColor('#' . $firstColor);
        $colors->setSecondColor('#' . $secondColor);

        $user->setHeader($head);
        $user->setFooter($footer);
        $em->flush();
        $session->set('h',  $head);
        $session->set('f',  $footer);


        $response = new Response();
        $response->setContent('Ok');
        $response->setStatusCode(Response::HTTP_OK);

        // set a HTTP response header
        $response->headers->set('Content-Type', 'text/html');
        // print the HTTP headers followed by the content
        $response->send();
        return $response;
    }




}