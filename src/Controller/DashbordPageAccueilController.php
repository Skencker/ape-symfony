<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashbordPageAccueilController extends AbstractController
{
    #[Route('/dashbord', name: 'dashbord')]
    public function index(): Response
    {
        return $this->render('dashbord_page_accueil/index.html.twig', [
            'controller_name' => 'DashbordPageAccueilController',
        ]);
    }
}
