<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AbfController extends AbstractController
{
    /**
     * @Route("/abf", name="abf")
     */
    public function index(): Response
    {
        return $this->render('abf/index.html.twig', [
            'controller_name' => 'AbfController',
        ]);
    }
}
