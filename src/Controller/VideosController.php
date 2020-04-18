<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class VideosController extends AbstractController
{
    /**
     * @Route("/anh-van-online", name="videos")
     */
    public function index()
    {
        return $this->render('videos/index.html.twig', [
            'title' => 'Kênh anh văn Online',
        ]);
    }
}
