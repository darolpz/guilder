<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ChangePasswordType extends AbstractType

{
	 /**
     * {@inheritdoc}
     */
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder->add('password', PasswordType::class);
		$builder->add('plainPassword', RepeatedType::class, array(
			'type' => PasswordType::class,
			'invalid_message' => 'Las passwords deben coincidir.',
			'required' => true,
			'first_options'  => array('label' => 'Nueva password'),
			'second_options' => array('label' => 'Repetir nueva password'),
			
			'first_name'  => 'first',
			'second_name' => 'second',
		));
		$builder->add('ChangePassword', SubmitType::class);
	}
}