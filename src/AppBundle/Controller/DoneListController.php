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
    public function tasks()
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT p
            FROM AppBundle:Task p
            WHERE p.userid = :userid  
            AND p.state = 2
            ORDER BY p.userid ASC'
        )->setParameter('userid', $user->getId());
        $tasks = $query->getResult();
        return $this->render('default/DoneList.html.twig', array('result' => $tasks));
    }
}
