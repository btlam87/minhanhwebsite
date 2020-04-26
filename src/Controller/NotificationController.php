<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;
class NotificationController extends AbstractController
{
    /**
     * @Route("/Thong-bao", name="notification")
     */
    public function allnoticesshow()
    {
        $notices = $this->getDoctrine()->getRepository(Article::class)->findByExampleField(3,100000);
        return $this->render('notification/index.html.twig', [
            'notice_list' => $notices,
        ]);
    }
    public function allnoticetitle()
    {
        $notices = $this->getDoctrine()->getRepository(Article::class)->findByExampleField(3,5);
        return $this->render('notification/notice.html.twig', [
            'notice_title_list' => $notices,
        ]);
    }
}
