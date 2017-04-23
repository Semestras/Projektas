<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LateListController extends Controller
{
    /**
     * @Route("/LateList", name="LateList")
     */
    public function numberAction()
    {
        return $this->render('default/LateList.html.twig');
    }
}