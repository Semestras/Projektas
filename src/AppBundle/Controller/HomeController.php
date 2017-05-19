<?php
//src/AppBundle/Controller/HomeController.php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    /**
     * @Route("/home", name="home")
     */
    public function homeAllTasks() #visada_iskvieciama_funkcija
    {
        $todaydate = date("l-jS-F");
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $query1 = $em->createQuery(
            'SELECT p
            FROM AppBundle:Task p
            WHERE p.userid = :userid
            AND p.state = 0
            ORDER BY p.userid ASC'
        )->setParameter('userid', $user->getId());
        $query2 = $em->createQuery(
            'SELECT p
            FROM AppBundle:Task p
            WHERE p.userid = :userid
            AND p.state = 1
            ORDER BY p.userid ASC'
        )->setParameter('userid', $user->getId());
        $latesql = $em->createQuery(
            'UPDATE AppBundle:Task
            SET state = 1
            WHERE duedate < :todaydate')->setParameter('todaydate', $todaydate);
        $tasks1 = $query1->getResult();
        $tasks2 = $query2->getResult();

        return $this->render('default/home.html.twig', array('result1' => $tasks1, 'result2' => $tasks2));
    }
}