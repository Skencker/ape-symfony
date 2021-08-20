<?php

namespace App\Controller\Admin;

use App\Entity\Liens;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class LiensCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Liens::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            TextField::new('lien')
      
        ];
    }
    
}
