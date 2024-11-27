<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CuisinesController extends AbstractController
{
    #[Route('/cuisines', name: 'app_cuisines')]
    public function index(): Response
    {
        return $this->render('cuisines/index.html.twig', [
            'controller_name' => 'CuisinesController',
        ]);
    }
}
