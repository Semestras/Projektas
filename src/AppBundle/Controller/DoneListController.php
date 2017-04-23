<?php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DoneListController extends Controller
{
    /**
     * @Route("/DoneList", name="DoneList")
     */
    public function numberAction()
    {
        return $this->render('default/DoneList.html.twig');
    }
}