<?php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class loginDController extends Controller
{
    /**
     * @Route("/loginD", name="loginD")
     */
    public function numberAction()
    {
        return $this->render('security/loginD.html.twig');
    }
}