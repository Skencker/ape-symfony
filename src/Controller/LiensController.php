<?php

namespace App\Controller;

use App\Entity\Liens;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class LiensController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/liens', name: 'liens')]
    public function index(): Response
    {
        $liens = $this->entityManager->getRepository(Liens::class)->findAll();

        return $this->render('liens/index.html.twig', [
            'liens' => $liens
        ]);
    }
}
