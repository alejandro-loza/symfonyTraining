<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Acme\DemoBundle\Form\ContactType;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class RandomController extends Controller
{
    public function indexAction($limit)
    {
        $number = rand(1, $limit);

        return $this->render(
            'AcmeDemoBundle:Random:index.html.twig',
            array('number' => $number)
        );

        // render a PHP template instead
        // return $this->render(
        //     'AcmeDemoBundle:Random:index.html.php',
        //     array('number' => $number)
        // );
    }
}
