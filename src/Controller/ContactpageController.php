<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Qa;
use App\Entity\Contacts;

class ContactpageController extends AbstractController
{
    /**
     * @Route("/Lien-he-Minh-Anh", name="contactpage")
     */
    public function contact()
    {
        $contacts = $this->getDoctrine()->getRepository(Contacts::class)->findAll();
        $qa       = $this->getDoctrine()->getRepository(Qa::class)->findAll();

        return $this->render('contactpage/index.html.twig', [
            'contacts_list' => $contacts,
            'qas_list'      => $qa,
        ]);
    }  
}