<?php

namespace App\Controller\Admin;

use App\Entity\Liens;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class LiensCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Liens::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
