<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/Lien-he-minh-anh", name="contact")
     */
    public function index()
    {
        return $this->render('contact/index.html.twig', [
            'title' => 'Liên hệ trung tâm Minh Anh',
        ]);
    }
}
