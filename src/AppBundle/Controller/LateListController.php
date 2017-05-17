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
    public function tasks()
    {

        $user = $this->get('security.token_storage')->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
            'SELECT p
            FROM AppBundle:Task p
            WHERE p.userid = 0
            AND p.state = 1
            ORDER BY p.userid ASC'
        );

        /*
         * visus gautus rezultatus sudeda i masyva
         */
        $tasks = $query->getResult();

        /*
         * i spausdinimo forma nusiuncia duota masyva kuri isspausdina
         */
        return $this->render('default/LateListTask.html.twig', array('result' => $tasks));
    }
}