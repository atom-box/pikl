<?php

namespace App\Controller;

use App\Entity\Task;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/*
it’s better to move complex forms to dedicated
classes instead of defining them in controller actions.
*/


class LongUrlController extends AbstractController
{
    public function new(Request $request): Response
    {
        // creates a task object and initializes some data for this example
        $longUrl = new LongUrl();
        /*
        $longUrl->setTask('Enter a loooonnnnng URL');
        $longUrl->shortify();

        $form = $this->createFormBuilder($longUrl)
            ->add('rawUrl', UrlType::class)
            ->getForm();
*/
        // ...
        $form = $this->createForm(TaskType::class, $longUrl);

        return $this->render('templates/base.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
