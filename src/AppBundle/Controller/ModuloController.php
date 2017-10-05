<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use AppBundle\Entity\Comision;

class ModuloController extends Controller
{
    /**
     * @Route("/modulo1", name="modulo1")
     */
    public function modulo1Action(Request $request)
    {
        // Falta chequear el año y cuatrimestre
        $em = $this->getDoctrine()->getManager();

        $comisiones = $em->getRepository('AppBundle:Comision')->findAll();
        $materias =$em ->getRepository ('AppBundle:Materia')->findAll();
        
        return $this->render('modulo/modulo1.html.twig', array(
            'comisiones'=>$comisiones,
            'materias'=>$materias,
        ));
    }
    /**
     * @Route("/modulo2", name="modulo2")
     *  @Method({"GET", "POST"})
     */
    public function modulo2Action(Request $request)
      {
       $comision = new Comision();
       $form = $this->createForm('AppBundle\Form\ComisionType_1', $comision);
       $form->handleRequest($request);
       
       $em = $this->getDoctrine()->getManager();
       
       if ($comision->getYear()==null){
           
           if($comision->getCuatrimestre()==null){
               $comisions = $em->getRepository('AppBundle:Comision')->
                       findBymateriamateria($comision->getMateriamateria());

           }
           
           else{ 
           $comisions = $em->getRepository('AppBundle:Comision')->findBy(array(
               'materiamateria'=>$comision->getMateriamateria(),
               'cuatrimestre'=>$comision->getCuatrimestre()
               ));
           }
       }
       else{
           if($comision->getCuatrimestre()==null){
            $comisions = $em->getRepository('AppBundle:Comision')->findBy(array(
            'materiamateria'=>$comision->getMateriamateria(),
            'year'=>$comision->getYear(),
                ));
           }
           
           else{
            $comisions = $em->getRepository('AppBundle:Comision')->findBy(array(
            'materiamateria'=>$comision->getMateriamateria(),
            'year'=>$comision->getYear(),
            'comision'=>$comision->getCuatrimestre()
               ));
           }
       }
       $horarios=array();
       foreach($comisions as $comision){
           $horario= $em->getRepository('AppBundle:Horario')->findBycomisioncomision(
                   $comision->getIdcomision()   
           );
           $horarios[]=$horario;
       }
       //por cada comision tengo que buscar todos los horarios que contengan esa comision y guardarlas en horarios
       //podria crear un arreglo que contenga una comision y sus horarios y con un if solucionar el tema de muchos horarios
       
       //recorrer todas las comisiones y por cada una agregar a un arreglo grande un arreglo de la comision mas sus horarios  
             
           
    
        return $this->render('modulo/modulo2.html.twig', array(
            'comisions' => $comisions,
            'horarios' => $horarios,
            'form' => $form->createView(),
        ));
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
    }
}
