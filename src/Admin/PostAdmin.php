<?php
namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

final class PostAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $form): void
    {
        $form->add('id', IntegerType::class);
        $form->add('userId', IntegerType::class);
        $form->add('title', TextType::class);
        $form->add('body', TextType::class);

    }

    protected function configureDatagridFilters(DatagridMapper $datagrid): void
    {
        $datagrid->add('id');
        $datagrid->add('userId');
        $datagrid->add('title');
        $datagrid->add('body');
    }

    protected function configureListFields(ListMapper $list): void
    {
        $list->addIdentifier('id');
        $list->addIdentifier('userId');
        $list->addIdentifier('title');
        $list->addIdentifier('body');
    }

    public function prePersist($object): void
    {
        
    }

    public function getExportFormats(): array
    {
        return array();
    }
}