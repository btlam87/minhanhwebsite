<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Slide;
use App\Entity\Excillencestudent;
use App\Entity\Article;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function homepage()
    {
        $slider = $this->getDoctrine()->getRepository(Slide::class)->findAll();
        $students = $this->getDoctrine()->getRepository(Excillencestudent::class)->findAll();
        $facility_ar = $this->getDoctrine()->getRepository(Article::class)->find(4);
        
        return $this->render('homepage/index.html.twig',
        
         ['title'=>'Anh ngữ Minh Anh',
         'slider'=> $slider,
         'student_list' => $students,
         'facility_ar'=>$facility_ar,

         ]);
    }
}
