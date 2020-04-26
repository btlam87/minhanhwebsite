<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Slide;
use App\Entity\Excillencestudent;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function homepage()
    {
        $slider = $this->getDoctrine()->getRepository(Slide::class)->findAll();
        $students = $this->getDoctrine()->getRepository(Excillencestudent::class)->findAll();
        return $this->render('homepage/index.html.twig',
        
         ['title'=>'Anh ngữ Minh Anh',
         'slider'=> $slider,
         'student_list' => $students,
         
         ]);
    }
}
