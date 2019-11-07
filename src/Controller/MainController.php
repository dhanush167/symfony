<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/main", name="main")
     */
    public function index()
    {
        //http://symfony.test/index.php/main
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}
