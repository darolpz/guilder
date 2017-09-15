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
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('modulo/modulo1.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}
