<?php

namespace App\Controller;

use App\Entity\ConseilEcole;
use App\Entity\Documents;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class DocumentsController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/documents', name: 'documents')]
    public function index(): Response
    {
        $conseilEcole = $this->entityManager->getRepository(ConseilEcole::class)->findAll();
        $documents = $this->entityManager->getRepository(Documents::class)->findAll();

        return $this->render('documents/index.html.twig', [
            'conseilecole' => $conseilEcole,
            'documents' => $documents
        ]);
    }
}
