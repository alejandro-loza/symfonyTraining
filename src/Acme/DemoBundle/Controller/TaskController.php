<?php
/**
 * Created by IntelliJ IDEA.
 * User: pinky
 * Date: 13/05/15
 * Time: 03:58 PM
 */

namespace Acme\DemoBundle\Controller;


use Acme\DemoBundle\Entity\Tag;
use Acme\DemoBundle\Entity\Task;
use Acme\DemoBundle\Form\TaskType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class TaskController extends  Controller {
    public function newAction(Request $request)
    {
        $task = new Task();
//        $task->setTask('Write a blog post');
        $task->setDueDate(new \DateTime('tomorrow'));
        $tag1 = new Tag();
        $tag1->name = 'tag1';
        $task->getTags()->add($tag1);
        $tag2 = new Tag();
        $tag2->name = 'tag2';
        $task->getTags()->add($tag2);

        $form = $this->createForm(new TaskType(),$task);
        $form ->add('save', 'submit', array('label' => 'Create Task'));

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($task);
            $em->flush();

            $session = $this->getRequest()->getSession();
            $session->getFlashBag()->add('message', 'Task saved!');

            return new RedirectResponse($this->generateUrl('_demo'));
        }

        return $this->render('AcmeDemoBundle:Task:task.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
