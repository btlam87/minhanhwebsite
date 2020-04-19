<?php

namespace App\Form;

use App\Entity\Message;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;



class MessageformType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fullname', TextType::class,['label' => 'Tên của bạn'])
            ->add('phone', TextType::class, ['label' => 'Số điện thoại'])
            ->add('email', EmailType::class, ['label' => 'Email (khi không gọi được)'])
            ->add('mess', TextareaType::class, ['label' => 'Nội dung liên hệ'])
            ->add('status',  HiddenType::class,['data'=>'1'])
            ->add('save', SubmitType::class, ['label'=>'Gửi'])
            
        ;
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Message::class,
        ]);
    }
}
