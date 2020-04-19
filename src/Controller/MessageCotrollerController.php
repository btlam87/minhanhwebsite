<?php

namespace App\Controller;

use App\Form\MessageformType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Message;

class MessageCotrollerController extends AbstractController
{
    /**
     * @Route("/message", name="message_cotroller")
     */
    public function Message(Request $request)
    {
        // return $this->render('message_cotroller/index.html.twig', [
        //     'controller_name' => 'MessageCotrollerController',
        // ]);
        $mess = new Message();
        $form = $this->createForm(MessageformType::class,$mess);

        $form->handleRequest($request);
        if($form->get('save')->isClicked() && $form->isValid())
        {
            dump($form->getData());
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($mess);
            $entityManager->flush();
            // echo("Toi day");
            return $this->redirectToRoute('homepage');
            
        }
        return $this->render('message/index.html.twig',  ['mess_form' => $form->createView()]);

    }
}
