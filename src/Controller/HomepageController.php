<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Slide;
use App\Entity\Excillencestudent;
use App\Entity\Article;
use App\Entity\Course;
use App\Entity\Coursegroup;
use App\Entity\Skill;
use App\Entity\Contact;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function homepage()
    {
        $slider = $this->getDoctrine()->getRepository(Slide::class)->findActive();
        $students = $this->getDoctrine()->getRepository(Excillencestudent::class)->findActive();
        $facility_ar = $this->getDoctrine()->getRepository(Article::class)->find(4);
        
        $coursesgroup = $this->getDoctrine()->getRepository(Coursegroup::class)->findActive();
        $course = $this->getDoctrine()->getRepository(Course::class)->findAll();

        $articles = $this->getDoctrine()->getRepository(Article::class)->getAllskillarticle();
        
        return $this->render('homepage/index.html.twig',
        
         [
         'slider'=> $slider,
         'student_list' => $students,
         'facility_ar'=>$facility_ar,
         'coursesgroup_list'=>$coursesgroup,
         'course_list' =>$course,
         'article_list' => $articles,
         
         ]);
    }
}
