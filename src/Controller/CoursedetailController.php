<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Course;
use App\Entity\Coursegroup;

class CoursedetailController extends AbstractController
{
    /**
     * @Route("/Dao-tao/{idgroup}/{idcourse}", name="coursedetail")
     */
    public function coursedetail($idgroup,$idcourse)
    {
        $course = $this->getDoctrine()->getRepository(Course::class)->find($idcourse);
        $group = $this->getDoctrine()->getRepository(Coursegroup::class)->find($idgroup);
        $similars = $this->getDoctrine()->getRepository(Course::class)->findByExampleField($idgroup);
        return $this->render('coursedetail/index.html.twig', [
            'course' => $course,
            'group' => $group,
            'similar_list' =>$similars,
        ]);
    }
}
