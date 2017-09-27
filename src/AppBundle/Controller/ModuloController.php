<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ModuloController extends Controller
{
    /**
     * @Route("/modulo1", name="modulo1")
     */
<<<<<<< HEAD
    public function modulo1Action(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('modulo/modulo1.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/modulo2", name="modulo2")
     */
    public function modulo2Action(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('modulo/modulo2.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/modulo3", name="modulo3")
     */
    public function modulo3Action(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('modulo/modulo3.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/resultados", name="resultados")
     */
    public function resultadosEncAction(Request $request)
    {
//        var_dump($_POST);
        if (isset($_POST['submit']))
        {
            $materias='';
            if(isset($_POST['materia']))
            {
                $materias = implode(',', $_POST['materia']);
                echo 'Seleccionaste las materias: '.implode(', ', $_POST['materia']);
            }
        }
        die();
        // replace this example code with whatever you need
        return $this->render('modulo/modulo3.html.twig',[
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
=======
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $horarios = $em->getRepository('AppBundle:Horario')->findAll();
        
        return $this->render('modulo/modulo1.html.twig',
                ['base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,]);
>>>>>>> 3edb84c83327028cb8b31cb8e542827775b7cdb1
    }
}
