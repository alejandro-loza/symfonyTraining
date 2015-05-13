<?php

namespace Acme\DemoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class TaskType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('task', 'text');
        $builder->add('dueDate', 'date');
        $builder->add('save', 'submit', array('label' => 'Create Task'));
    }

    public function getName()
    {
        return 'task';
    }
}

