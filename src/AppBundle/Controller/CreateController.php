<?php
namespace AppBundle\Controller;

use AppBundle\Form\UserType;
use AppBundle\Entity\User;
use AppBundle\Form\CreateTask;
use AppBundle\Entity\Task;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CreateController extends Controller
{
    /**
     * @Route("/create", name="create")
     */
    public function createTask(Request $request)
    {
        // 1) build the form
        $task = new Task();
        $user = new User();
        $form = $this->createForm(CreateTask::class, $task);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        $task->setUserid($user->getId());
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($task);
            $em->flush();

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user

            return $this->redirectToRoute('/home');
        }

        return $this->render(
            'default/create.html.twig',
            array('form' => $form->createView())
        );
    }
}