<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Repository\SkillRepository;
use Symfony\Component\Form\FormEvents;
use App\Form\SkillformType;

use App\Entity\Skill;
use App\Entity\Article;

class SkillsController extends AbstractController
{
    // /**
    //  * @Route("/Kinhh-nghiem-học-anh-van", name="skills")
    //  */
    // public function articlelist()
    // {

    //     return $this->render('skills/index.html.twig', [
    //         'title' => 'Kinh nghiệm học Anh Văn',
            
    //     ]);
    // }
    // public function skillform()
    // {   
    //     $form = $this->createFormBuilder()
    //         ->add('skills', EntityType::class, [ 
    //             'placeholder' => 'Chọn kỹ năng bạn muốn:',
    //             'label' => "Chọn một kỹ năng",
    //             'invalid_message' => 'Invalid value',
                  
    //             'class'  => Skill::class,
    //             'choice_label' => function (Skill $skill)
    //             {
    //                 return sprintf('(%d) %s', $skill->getId(), $skill->getName());
    //             },
                
    //        ])
    //        ->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent $event)
    //        {
    //             dd($event);
    //        })

    //        ->getForm()
    //     ;
  
    //     return $this->render('skills\\skill_list.html.twig',['form_skill'=>$form->createView()]);
    // }

    /**
     * @Route("/Kinh-nghiem-hoc-anh-van", name="skills")
     */
    public function showArticle(){
        $skills = $this->getDoctrine()->getRepository(Skill::class)->findAll();

        $articles = $this->getDoctrine()->getRepository(Article::class)->getSkillarticle();
        
        return $this->render('skills/index.html.twig', [
                'title' => 'Kinh nghiệm học Anh Văn',
                'article_list' => $articles,
                'skill_list' => $skills,
            ]);
    }
    /**
     * @Route("/Kinh-nghiem-hoc-anh-van/{skill_id}", name="a_skills")
     */
    public function showSkillarticle($skill_id){

        $skills = $this->getDoctrine()->getRepository(Skill::class)->findAll();

        if($skill_id == "all")
        {
            $articles = $this->getDoctrine()->getRepository(Article::class)->getAllskillarticle();
            dump($articles);
            return $this->render('skills/index.html.twig', [
                    'title' => 'Kinh nghiệm học Anh Văn',
                    'article_list' => $articles,
                    'skill_list' => $skills,
                ]);
        }
        else{

            $articles = $this->getDoctrine()->getRepository(Article::class)->getOneskillarticle($skill_id);
            dump($articles);
            return $this->render('skills/index.html.twig', [
                    'title' => 'Kinh nghiệm học Anh Văn',
                    'article_list' => $articles,
                    'skill_list' => $skills,
                ]);
        }
        return $this->render('skills/index.html.twig', [
            'title' => 'Kinh nghiệm học Anh Văn',]);
      
    }
    
    public function showsoptions()
    {
        $form = $this->createForm(SkillformType::class);

        return $this->render('skills\\skill_list.html.twig',['form_skill'=>$form->createView()]);
    }

    
    public function vn_to_str ($str){
 
        $unicode = array(
         
        'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
         
        'd'=>'đ',
         
        'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
         
        'i'=>'í|ì|ỉ|ĩ|ị',
         
        'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
         
        'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
         
        'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
         
        'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
         
        'D'=>'Đ',
         
        'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
         
        'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
         
        'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
         
        'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
         
        'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
         
        );
         
        foreach($unicode as $nonUnicode=>$uni){
         
        $str = preg_replace("/($uni)/i", $nonUnicode, $str);
         
        }
        $str = str_replace(' ','-',$str);
         
        return $str;
         
        }

}
