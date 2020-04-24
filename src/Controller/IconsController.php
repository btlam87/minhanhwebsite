<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Footericons;

class IconsController extends AbstractController
{
    public function icons()
    {
        $icons = $this->getDoctrine()->getRepository(Footericons::class)->findAll();
        return $this->render('icons/index.html.twig',[
            'icons_list'=>$icons,
        ]
       );
    }
}
