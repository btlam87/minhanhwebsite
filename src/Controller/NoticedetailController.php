<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;

class NoticedetailController extends AbstractController
{
    /**
     * @Route("/Thong-bao/{id}", name="noticedetail")
     */
    public function noticedetail($id)
    {
        $noticedetail = $this->getDoctrine()->getRepository(Article::class)->find($id);

        return $this->render('noticedetail/index.html.twig', [
            'notice' =>  $noticedetail,
        ]);
    }
}
