<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ContactpageController extends AbstractController
{
    /**
     * @Route("/Lien-he-Minh-Anh", name="contactpage")
     */
    public function index()
    {
        return $this->render('contactpage/index.html.twig', [
            'controller_name' => 'ContactpageController',
        ]);
    }  
}