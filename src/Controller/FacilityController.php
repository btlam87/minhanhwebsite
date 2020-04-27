<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;

class FacilityController extends AbstractController
{
    /**
     * @Route("/Co-so-vat-chat-trung-tam-ngoai-ngu-Minh-Anh", name="facility")
     */
    public function index()
    {
        $facility = $this->getDoctrine()->getRepository(Article::class)->find(4);
        return $this->render('facility/index.html.twig', [
            'intro' => $facility,
        ]);
    }
}
