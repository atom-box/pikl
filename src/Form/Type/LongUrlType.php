<?php

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;

class LongUrlType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('longUrl', UrlType::class)
            ->add('save', SubmitType::class);
    }
}

/*
1) The form class contains all the directions needed to
create the task form. In controllers extending from the
AbstractController, use the createForm() helper (otherwise,
 use the create() method of the form.factory service):

2) Every form needs to know the name of the class that holds
 the underlying data (e.g. App\Entity\Task).
 =========>
 Usually, this is
 just guessed based off of the object passed to the second
 argument to createForm() (i.e. $task). Later, when you begin
  embedding forms, this will no longer be sufficient.

So, while not always necessary, it’s generally a good idea to explicitly specify the data_class option by adding the following to your form type class:
*/
