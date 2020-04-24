<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Videos;

class VideosController extends AbstractController
{
    /**
     * @Route("/anh-van-online", name="videos")
     */
    public function videos()
    {
        $videos = $this->getDoctrine()->getRepository(Videos::class)->findAll();
        return $this->render('videos/index.html.twig', [
            'title' => 'Kênh anh văn Online',
            'videos_list' => $videos,
        ]);
    }
}
