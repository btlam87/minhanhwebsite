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
        $notices = $this->getDoctrine()->getRepository(Article::class)->findByExampleField(3);
        return $this->render('notification/index.html.twig', [
            'notice_list' => $notices,
        ]);
    }
}
