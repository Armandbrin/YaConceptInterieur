<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class SalleDeBainController extends AbstractController
{
    #[Route('/salle/de/bain', name: 'app_salle_de_bain')]
    public function index(): Response
    {
        return $this->render('salle_de_bain/index.html.twig', [
            'controller_name' => 'SalleDeBainController',
        ]);
    }
}
