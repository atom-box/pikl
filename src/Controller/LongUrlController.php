<?php

namespace App\Controller;

use App\Entity\Task;
use App\Entity\LongUrl;
use App\Form\Type\OrderType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\UrlType;

/*
it’s better to move complex forms to dedicated
classes instead of defining them in controller actions.
*/


class LongUrlController extends AbstractController
{

    /**
     * @Route("/formone", name="app_form_one")
     */
    public function new(Request $request): Response
    {
        // creates a task object and initializes some data for this example
        $longUrl    = new LongUrl();

        $longUrl->setLongUrl('Enter link here');

        $form = $this->createFormBuilder($longUrl)
            ->add('longUrl', UrlType::class)
            ->add('save', SubmitType::class, [
                'label' => 'Shorten URL',
            ])
            ->getForm();

        // $form = $this->createZ                         Form(OrderType::class, $longUrl);

        return $this->render('formOne.html.twig', [
            'form' => $form->createView(),
            'garlic' => 'liquid fence',
        ]);
    }
}
