<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use AppBundle\Form\UserType;
use AppBundle\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use AppBundle\Entity\Comision;
use AppBundle\Entity\Materia;
use AppBundle\Entity\Horario;
use AppBundle\Entity\Dia;
use DateTime;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class DefaultController extends Controller {

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request) {
// replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
                    'base_dir' => realpath($this->getParameter('kernel.project_dir')) . DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/crearusuarios", name="crearUsuarios")
     */
    public function registerAction(Request $request, UserPasswordEncoderInterface $passwordEncoder) {
// 1) build the form
        $user = new User();
        $user->setUsername("usuario1");
        $user->setPlainPassword("1234");
        $rol = $this->getDoctrine()->getRepository('AppBundle:Rol')->findOneByrol('ROLE_USER');
        $user->setRolrol($rol);
// 3) Encode the password (you could also do this via Doctrine listener)
        $password = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
        $user->setPassword($password);
// 4) save the User!
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();


        $user1 = new User();
        $user1->setUsername("admin1");
        $user1->setPlainPassword("1234");
        $rol = $this->getDoctrine()->getRepository('AppBundle:Rol')->findOneByrol('ROLE_ADMIN');
        $user1->setRolrol($rol);
        $password = $passwordEncoder->encodePassword($user, $user1->getPlainPassword());
        $user1->setPassword($password);
// 4) save the User!
        $em = $this->getDoctrine()->getManager();
        $em->persist($user1);
        $em->flush();

        return $this->redirectToRoute('homepage');
    }
}
