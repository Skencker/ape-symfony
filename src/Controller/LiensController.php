<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LiensController extends AbstractController
{
    #[Route('/liens', name: 'liens')]
    public function index(): Response
    {
        return $this->render('liens/index.html.twig', [
            'controller_name' => 'LiensController',
        ]);
    }
}
