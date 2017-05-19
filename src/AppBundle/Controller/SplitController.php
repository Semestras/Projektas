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
        $user = $this->get('security.token_storage')->getToken()->getUser();

        /*
         * nesigilinau kam, bet reikalinga eilute, berods gauna viska is duombazes
         */
        $em = $this->getDoctrine()->getManager();

        /*
         * cia atrenkami reikalingi taskai, yra keli budai, cia parasytas naudojant sql komandas
         * p - naujas objektas, appbundle:task nurodo jo klase, kurios iesko duomenu bazej
         * where nurodo pagal ka reikia rasti. siuo atveju pagal atskira parametra userid
         * orderby, isrusiuoja, siuo atveju nebutina
         * userid gaunamas is prisijungusio asmens panaudojant metoda
         */
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


        return $this->render('default/Split.html.twig', array('result' => $tasks));
    }
}