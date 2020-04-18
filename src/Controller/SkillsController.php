<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SkillsController extends AbstractController
{
    /**
     * @Route("/Kinhh-nghiem-học-anh-van", name="skills")
     */
    public function index()
    {
        return $this->render('skills/index.html.twig', [
            'title' => 'Kinh nghiệm học Anh Văn',
        ]);
    }
}
