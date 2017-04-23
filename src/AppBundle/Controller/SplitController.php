<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SplitController extends Controller
{
    /**
     * @Route("/Split", name="Split")
     */
    public function numberAction()
    {
        return $this->render('default/Skaidymas.html.twig');
    }
}