<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/", name="main.")
 */
class MainController extends AbstractController
{
    /**
     * @Route("", name="main")
     */
    public function index()
    {

        // dodajemy jeszcze trochę lini kodu
        $someVar = true;

        // a new line from TICKET 66
        // dodajemy mnogie ilości nowego kodu

        //dodajemy tutaj jeszcze parę lini kodu
        //fix bug in release v0.1.0

        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}
