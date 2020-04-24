<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;

class IntroController extends AbstractController
{
    /**
     * @Route("/Gioi-thieu-Minh-Anh", name="intro")
     */
    public function intro()
    {
        $intro = $this->getDoctrine()->getRepository(Article::class)->find(1);

        return $this->render('intro/index.html.twig', [
            'title' =>  "Giới thiệu trung tâm Minh Anh",   
            'intro'=>$intro,
        ]);
    }
}
