<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EcolealaeController extends AbstractController
{
    #[Route('/ecolealae', name: 'ecolealae')]
    public function index(): Response
    {
        return $this->render('ecolealae/index.html.twig', [
            'controller_name' => 'EcolealaeController',
        ]);
    }
}
