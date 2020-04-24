<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ArticleRepository;

use App\Entity\Article;

class ArticleController extends AbstractController
{
    // /**
    //  * @Route("/article", name="article")
    //  */
    // public function index()
    // {
    //     return $this->render('article/index.html.twig', [
    //         'title' => 'Bài viết',
    //     ]);
    // }

    // /**
    //  * @Route("/{$skillgroupname}/{$skillname}/{$articleid}", name="skill_article")
    //  */
    // public function showarticle($skillname,$articleid)
    // {
    //     $article = $this->getDoctrine()->getRepository(Article::class)->getArticle($skillname,$articleid);

    //     return $this->render('article/index.html.twig', [
    //         'title' => 'Bài viết',
    //         'skillname'=>$skillname,
    //         'articleid'=>$articleid,
            
    //     ]);

    // }

    /**
     * @Route("/Kinh-nghiem-hoc-anh-van/{skill_id}/{articleid}", name="skill_article")
     */
    public function showOnearticle($skill_id,$articleid)
    {
        
        $article = $this->getDoctrine()->getRepository(Article::class)->find($articleid);
        $similar = $this->getDoctrine()->getRepository(Article::class)->getSimilararticles($skill_id);
        dump($article);
        return $this->render('article/index.html.twig', [
            'title' => 'Bài viết',
            'article'=>$article,
            'similar_list'=>$similar,
        ]);

    }

    
}
