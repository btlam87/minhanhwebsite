<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Course;
use App\Entity\Coursegroup;

class CoursegroupdetailController extends AbstractController
{
    /**
     * @Route("/Dao-tao/{groupid}", name="coursegroupdetail")
     */
    public function coursegroup($groupid)
    {

        $courses = $this->getDoctrine()->getRepository(Course::class)->findByExampleField($groupid);
        $coursegroup = $this->getDoctrine()->getRepository(Coursegroup::class)->find($groupid);
        return $this->render('coursegroupdetail/index.html.twig', [
            'course_list' =>  $courses,
            'coursegroup'=>$coursegroup,
        ]);
    }
}
