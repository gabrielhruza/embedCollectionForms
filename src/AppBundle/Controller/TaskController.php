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
use AppBundle\Form\ItemFilterType;



use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


/**
 * Task controller.
 *
 * @Route("/task")
 */
class TaskController extends Controller
{

    /**
     * @Route("/", name="task_index")
     */
    public function indexAction(Request $request){
        
        $em     = $this->getDoctrine()->getManager();
        $tasks  = $em->getRepository('AppBundle:Task')->findAll();

        $form = $this->get('form.factory')->create(ItemFilterType::class);

        if ($request->query->has($form->getName())) {
            // manually bind values from the request
            $form->submit($request->query->get($form->getName()));

            // initialize a query builder
            $filterBuilder = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:Task')
                ->createQueryBuilder('e');

            // build the query from the given form object
            $this->get('lexik_form_filter.query_builder_updater')->addFilterConditions($form, $filterBuilder);

            // now look at the DQL =)
            var_dump($filterBuilder->getDql());

            $q = $filterBuilder->getDql();

            //a partir del dql obtengo las entidades
            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery($q);

            $tasks = $query->getResult();

        }

        return $this->render('task/index.html.twig', array(
            'form' => $form->createView(),
            'tasks' => $tasks,
        ));
    }
    
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