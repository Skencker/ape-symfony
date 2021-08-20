<?php

namespace App\Controller\Admin;

use App\Entity\ConseilEcole;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;

class ConseilEcoleCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ConseilEcole::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            TextField::new('date'),
            ImageField::new('fichier')
                ->setUploadDir('public/uploads/files')
                ->setBasePath('uploads/files')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(false)
        ];
    }
    
}
