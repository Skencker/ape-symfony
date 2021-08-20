<?php

namespace App\Controller\Admin;

use App\Entity\Classes;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ClassesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Classes::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name')
        ];
    }
    
}
