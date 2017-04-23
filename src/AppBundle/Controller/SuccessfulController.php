<?php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SuccessfulController extends Controller
{
    /**
     * @Route("/successful", name="registered")
     */
    public function numberAction()
    {
        return $this->render('registration/registered.html');
    }
}