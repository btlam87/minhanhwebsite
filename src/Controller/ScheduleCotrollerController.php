<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;

class ScheduleCotrollerController extends AbstractController
{
    /**
     * @Route("/Lich-khai-giang-Minh-Anh", name="schedule")
     */
    public function index()
    {
        $schedule = $this->getDoctrine()->getRepository(Article::class)->find(8);
        return $this->render('schedule/index.html.twig', [
            'schedule' => $schedule,
        ]);
    }
}
