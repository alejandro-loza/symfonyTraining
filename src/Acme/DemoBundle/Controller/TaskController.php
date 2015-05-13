<?php
/**
 * Created by IntelliJ IDEA.
 * User: pinky
 * Date: 13/05/15
 * Time: 03:58 PM
 */

namespace Acme\DemoBundle\Controller;


use Acme\DemoBundle\Entity\Task;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TaskController extends  Controller {
    public function newAction(Request $request)
    {
        // create a task and give it some dummy data for this example
        $task = new Task();
        $task->setTask('Write a blog post');
        $task->setDueDate(new \DateTime('tomorrow'));

        $form = $this->createFormBuilder($task)
            ->add('task', 'text')
            ->add('dueDate', 'date')
            ->add('save', 'submit', array('label' => 'Create Task'))
            ->add('saveAndAdd', 'submit', array('label' => 'Save and Add'))
            ->getForm();
        if ($form->isValid()) {
            // ... perform some action, such as saving the task to the database

            $nextAction = $form->get('saveAndAdd')->isClicked()
                ? 'task_new'
                : 'task_success';

            return $this->redirectToRoute($nextAction);
        }

        return $this->render('default/new.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
