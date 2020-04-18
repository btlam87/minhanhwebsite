<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CoursesCotrollerController extends AbstractController
{
    /**
     * @Route("/Dao-tao", name="courses")
     */
    public function index()
    {
        return $this->render('courses/index.html.twig', [
            'title' => 'Các khóa học tại trung tâm Minh Anh',
        ]);
    }
}
