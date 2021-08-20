<?php

namespace App\Controller\Admin;

use App\Entity\ParentsDelegues;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;


class ParentsDeleguesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ParentsDelegues::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
             return [
            TextField::new('name'),
            TextField::new('firstname'),
            ImageField::new('image')
                ->setUploadDir('public/uploads/images')
                ->setBasePath('uploads/images')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(false),
            AssociationField::new('fonction'),
            AssociationField::new('classe')
            
      
        ];
    }
    
}
