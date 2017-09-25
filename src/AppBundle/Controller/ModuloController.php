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
        if (isset($_POST['submit']))
        {
            if(isset($_POST['seleccion']))
            {
                echo "Selecionaste la opción: ".$_POST['seleccion'];
            }
        }
        die();
        // replace this example code with whatever you need
        return $this->render('modulo/modulo3.html.twig',[
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}
