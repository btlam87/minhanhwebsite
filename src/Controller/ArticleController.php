<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ArticleRepository;

use App\Entity\Article;
use App\Entity\Course;

class ArticleController extends AbstractController
{

    /**
     * @Route("/Kinh-nghiem-hoc-anh-van/{skill_id}/{articleid}", name="skill_article")
     */
    public function showOnearticle($skill_id,$articleid)
    {
        
        $article = $this->getDoctrine()->getRepository(Article::class)->find($articleid);
        $similar = $this->getDoctrine()->getRepository(Article::class)->getSimilararticles($skill_id);
        $course = $this->getDoctrine()->getRepository(Course::class)->findAll();
        
        return $this->render('article/index.html.twig', [
            'title' => 'Bài viết',
            'article'=>$article,
            'similar_list'=>$similar,
            'course_list'=>$course,
        ]);

    }

    
}
