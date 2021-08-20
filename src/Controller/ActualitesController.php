<?php

namespace App\Controller;

use App\Entity\Actualites;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class ActualitesController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/actualites', name: 'actualites')]
    public function index(): Response
    {
        $actualites =  $this->entityManager
            ->getRepository(Actualites::class)
            ->findBy(array(),array('date' => 'DESC'));

        return $this->render('actualites/index.html.twig', [
            'actualites' => $actualites
        ]);
    }
}
