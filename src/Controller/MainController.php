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
        $someVar = true;

        //Hello world!

        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}
