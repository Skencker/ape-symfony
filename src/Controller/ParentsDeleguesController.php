<?php

namespace App\Controller;

use App\Entity\ParentsDelegues;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class ParentsDeleguesController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/parents/delegues', name: 'parents_delegues')]
    public function index(): Response
    {
        $parents =  $this->entityManager->getRepository(ParentsDelegues::class)->findAll();
        $classTab = ['PS', 'PS / MS', 'MS', 'MS / GS', 'GS', 'GS / CP','CP', 'CP / CE1', 'CE1', 'CE1 / CE2' , 'CE2' , 'CE2 / CM1' ,  'CM1', 'CM1 / CM2' , 'CM2' ];
        // $classeparents =  $this->entityManager->getRepository(ParentsDelegues::class)->findOneBy(['classe']);
       
// dd($classeparents);
        return $this->render('parents_delegues/index.html.twig', [
            'parents' => $parents,
            // 'classeparents' => $classeParent,
            'classTabs' => $classTab
        ]);
    }
}
