<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Repository\SkillRepository;

use App\Entity\Skill;
use App\Entity\Article;

class SkillsController extends AbstractController
{
    /**
     * @Route("/Kinhh-nghiem-học-anh-van", name="skills")
     */
    public function articlelist()
    {
        return $this->render('skills/index.html.twig', [
            'title' => 'Kinh nghiệm học Anh Văn',
            
        ]);
    }
    public function showskill()
    {   
        // $repository = $this->getDoctrine()->getRepository(Skill::class);
        // $skill = $repository->findAll();
        // foreach($skill as $vl)
        // {
        //     dump($vl->getName());
        // }
        // $defaults = ['skills'=> EntityType::class,['class'=> Skill::class],];
        $form = $this->createFormBuilder()
            ->add('skills', EntityType::class, [ 
                'placeholder' => 'Chọn kỹ năng bạn muốn:',
                'label' => "Chọn một kỹ năng",
                // 'default' => "Tất cả kỹ năng",
                'class'  => Skill::class,
                'choice_label' => function (Skill $vl)
                {
                    return $vl->getName();
                },
                
           ])
            ->getForm()
        ;
        
        return $this->render('skills\\skill_list.html.twig',['form_skill'=>$form->createView()]);
    }
    
}
