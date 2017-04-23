<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StickyNotesController extends Controller
{
    /**
     * @Route("/StickyNotes", name="StickyNotes")
     */
    public function numberAction()
    {
        return $this->render('default/StickyNotes.html.twig');
    }
}