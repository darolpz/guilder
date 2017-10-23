<?php

// src/AppBundle/Controller/RegistrationController.php
namespace AppBundle\Controller;

use AppBundle\Form\UserType;
use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

class RegistrationController extends Controller
{
    /**
     * @Route("/register", name="user_registration")
     */
    public function registerAction(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        // 1) build the form
        $user = new User();
		$em = $this->getDoctrine()->getManager();
        $rol = $em->getRepository('AppBundle:Rol')->findOneByrol('ROLE_USER');
        $user->setRolrol($rol);
        $form = $this->createForm('AppBundle\Form\RegistroType', $user);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) 
		{
			$token = $em->getRepository('AppBundle:Token')->findBy(array('token' => $codigo));
			// Se encripta la contraseña del usuario, se lo guarda en la BD y se elimina el token utilizado
			$password = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
			$user->setPassword($password);
			$em->persist($user);
			$em->remove($token[0]); // $token es un array de un elemento
			$em->flush();
			// Esto logea al usuario luego de registrarlo exitosamente
			$token = new UsernamePasswordToken($user, null, 'main', $user->getRoles());
			$this->get('security.token_storage')->setToken($token);
			$this->get('session')->set('_security_main', serialize($token));
				
			return $this->redirectToRoute('homepage');
		}
		// Error de usuario/contraseña
        return $this->render(
            'registration/register.html.twig',
            array('form' => $form->createView())
        );
    }

}
