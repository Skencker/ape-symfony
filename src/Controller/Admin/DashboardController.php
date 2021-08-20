<?php

namespace App\Controller\Admin;

use App\Entity\Actualites;
use App\Entity\Classes;
use App\Entity\ConseilEcole;
use App\Entity\Imagediapo;
use App\Entity\Liens;
use App\Entity\Organigramme;
use App\Entity\Documents;
use App\Entity\FonctionParentsDelegues;
use App\Entity\ParentsDelegues;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator ;

use Twig\Extra\Intl\IntlExtension;



class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        $routeBuilder = $this->get(AdminUrlGenerator::class);

        return $this->redirect($routeBuilder->setController(ImagediapoCrudController::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Ape');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Image diapo', 'fas fa-image', Imagediapo::class);
        yield MenuItem::linkToCrud('Organigramme', 'fas fa-sitemap', Organigramme::class);
        yield MenuItem::linkToCrud('Actualites', 'fas fa-newspaper', Actualites::class);
        yield MenuItem::linkToCrud('Ecole-alae', 'fas fa-school', Actualites::class);
        yield MenuItem::linkToCrud('Liens Utiles', 'far fa-file-alt', Liens::class);
        yield MenuItem::linkToCrud('Documents', 'fas fa-file-alt', Documents::class);
        yield MenuItem::linkToCrud('Classes', 'fas fa-chalkboard-teacher', Classes::class);
        yield MenuItem::linkToCrud('Fonctions Parents Délégués', 'fas fa-users-cog', FonctionParentsDelegues::class);
        yield MenuItem::linkToCrud('Parents Délégués', 'fas fa-user-plus', ParentsDelegues::class);
        yield MenuItem::linkToCrud('Conseils Ecole', 'fas fa-file-alt', ConseilEcole::class);
    }
}
