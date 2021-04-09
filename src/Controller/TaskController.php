<?php

namespace App\Controller;
// src/Controller/TaskController.php

use App\Entity\Task;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class TaskController extends AbstractController
{
    public function new(Request $request): Response
    {
        // creates a task object and initializes some data for this example
        $task = new Task();
        $task->setTask('Write a blog post');
        $task->setDueDate(new \DateTime('tomorrow'));

        // $form = $this->createForm(TaskType::class, $task);
        $form = $this->createFormBuilder($task)
            ->add('task', TextType::class)
            ->add('dueDate', DateType::class)
            ->add('save', SubmitType::class, ['label' => 'Create Task'])
            ->getForm();

        // return $this->render('task/new.html.twig', [
        return $this->render('templates/base.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/", name="app_homepage")
     */

    public function notifications(): Response
    {
        // get the user information and notifications somehow
        $userFirstName = '21111112';
        $userNotifications = ['man', 'working man'];

        // the template path is the relative file path from `templates/`
        // return $this->render('user/notifications.html.twig', [
        return $this->render('base.html.twig', [
            // this array defines the variables passed to the template,
            // where the key is the variable name and the value is the variable value
            // (Twig recommends using snake_case variable names: 'foo_bar' instead of 'fooBar')
            'user_first_name' => $userFirstName,
            'notifications' => $userNotifications,
        ]);
    }
}
