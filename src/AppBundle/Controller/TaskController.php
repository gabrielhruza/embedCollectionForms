<?php 
// src/AppBundle/Controller/TaskController.php
namespace AppBundle\Controller;

use AppBundle\Entity\Task;
use AppBundle\Entity\Tag;
use AppBundle\Form\TaskType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\Common\Collections\ArrayCollection;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;



use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;



class TaskController extends Controller
{
    
    /**
     * @Route("/task", name="task")
     */
    public function newAction(Request $request)
    {
        $task = new Task();

        // dummy code - this is here just so that the Task has some tags
        // otherwise, this isn't an interesting example
        /*$tag1 = new Tag();
        $tag1->name = 'tag1';
        $task->getTags()->add($tag1);
        $tag2 = new Tag();
        $tag2->name = 'tag2';
        $task->getTags()->add($tag2);*/
        // end dummy code

        $form = $this->createForm(TaskType::class, $task);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            //die(var_dump('hola'));

            $em = $this->getDoctrine()->getManager();

            $em->persist($task);
            $em->flush();

            return $this->render('task/new.html.twig', array(
            'form' => $form->createView(),
            ));
        }

        return $this->render('task/new.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/{id}/edit", name="task_edit")
     */
    public function editAction($id, Request $request)
    {
    $em = $this->getDoctrine()->getManager();
    $task = $em->getRepository('AppBundle:Task')->find($id);

    if (!$task) {
        throw $this->createNotFoundException('No task found for id '.$id);
    }

    $originalTags = new ArrayCollection();

    // Create an ArrayCollection of the current Tag objects in the database
    foreach ($task->getTags() as $tag) {
        $originalTags->add($tag);
    }

    $editForm = $this->createForm(TaskType::class, $task);

    $editForm->handleRequest($request);

    if ($editForm->isValid()) {

        // remove the relationship between the tag and the Task
        foreach ($originalTags as $tag) {
            if (false === $task->getTags()->contains($tag)) {
                // remove the Task from the Tag
                $tag->getTasks()->removeElement($task);

                // if it was a many-to-one relationship, remove the relationship like this
                // $tag->setTask(null);

                $em->persist($tag);

                // if you wanted to delete the Tag entirely, you can also do that
                $em->remove($tag);
            }
        }

        $em->persist($task);
        $em->flush();

        // redirect back to some edit page
        return $this->redirectToRoute('task_edit', array('id' => $id));
    }

    return $this->render('task/new.html.twig', array(
            'form' => $editForm->createView(),
        ));
}
}