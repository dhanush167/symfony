<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        //http://symfony.test/index.php/main
//        return $this->render('main/index.html.twig', [
//            'controller_name' => 'MainController',
//        ]);

        //http://symfony.test/
        return new Response('<h1> Welcomee freecode camp </h1>');
    }
}
