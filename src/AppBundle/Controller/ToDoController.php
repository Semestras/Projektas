<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ToDoController extends Controller
{
    /**
     * @Route("/ToDoList", name="ToDoList")
     */
    public function numberAction()
    {
        return $this->render('default/ToDoList.html.twig');
    }
}