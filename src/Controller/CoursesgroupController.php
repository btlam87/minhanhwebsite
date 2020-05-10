<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Coursegroup;
use App\Entity\Course;

class CoursesgroupController extends AbstractController
{
    /**
     * @Route("/Dao-tao", name="coursesgroup")
     */
    public function coursegroup()
    {
        $coursesgroup = $this->getDoctrine()->getRepository(Coursegroup::class)->findActive();
        $course = $this->getDoctrine()->getRepository(Course::class)->findAll();
        return $this->render('coursesgroup/index.html.twig', [
            'title' => 'Các khóa học tại trung tâm ngoại ngữ Minh Anh',
            'coursesgroup_list'=>$coursesgroup,
            'course_list' =>$course,
        ]);
    }
}
