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
          
        $form = $this->createForm(MessageformType::class);

        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid())
        {
            /** @var Message $mess */
            $mess = $form->getData();
            
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($mess);
            $entityManager->flush();
            $this->addFlash('success', 'Yêu cầu đã được gửi đi, trung tâm sẽ liên hệ bạn sớm nhất!');
            
            return $this->redirectToRoute('contactpage');
            
        }
        
        return $this->render('message/index.html.twig',  ['mess_form' => $form->createView()]);

    }
}
