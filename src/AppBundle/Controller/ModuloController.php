<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use AppBundle\Entity\Comision;
use AppBundle\Entity\Horario;
use AppBundle\Entity\Encuesta;
use AppBundle\Entity\Encuestausuario;
use Symfony\Component\HttpFoundation\Response;

class ModuloController extends Controller {

    /**
     * @Route("/modulo1", name="modulo1")
     */
    public function modulo1Action(Request $request) {
        // Falta chequear el año y cuatrimestre
        $em = $this->getDoctrine()->getManager();

        $comision = new Comision();
        $form = $this->createForm('AppBundle\Form\ComisionType_1', $comision);
        $form->handleRequest($request);

        $horarios = $em->getRepository('AppBundle:Horario')->findAll();
        $materias = $em->getRepository('AppBundle:Materia')->findAll();

        return $this->render('modulo/modulo1.html.twig', array(
                    'horarios' => $horarios,
                    'materias' => $materias,
        ));
    }

    /**
     * @Route("/modulo2", name="modulo2")
     *  @Method({"GET", "POST"})
     */
    public function modulo2Action(Request $request) {
        $comision = new Comision();
        $form = $this->createForm('AppBundle\Form\ComisionType_1', $comision);
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();

        if ($comision->getYear() == null) {//Caso 1,la comision no tiene año
            if ($comision->getCuatrimestre() == null) {//no tiene año y no tiene cuatrimestre
                $comisions = $em->getRepository('AppBundle:Comision')->
                        findBymateriamateria($comision->getMateriamateria());
            } else {//no tiene año pero tiene cuatrimestre
                $comisions = $em->getRepository('AppBundle:Comision')->findBy(array(
                    'materiamateria' => $comision->getMateriamateria(),
                    'cuatrimestre' => $comision->getCuatrimestre()
                ));
            }
        } else {            //caso 2,la tiene año
            if ($comision->getCuatrimestre() == null) {//la comision tiene año pero no tiene acuatrimestre
                $comisions = $em->getRepository('AppBundle:Comision')->findBy(array(
                    'materiamateria' => $comision->getMateriamateria(),
                    'year' => $comision->getYear(),
                ));
            } else {//la comision tiene año y cuatrimestre
                $comisions = $em->getRepository('AppBundle:Comision')->findBy(array(
                    'materiamateria' => $comision->getMateriamateria(),
                    'year' => $comision->getYear(),
                    'cuatrimestre' => $comision->getCuatrimestre()
                ));
            }
        }
        $horarios = array();
        foreach ($comisions as $comision) {
            $horario = $em->getRepository('AppBundle:Horario')->findBycomisioncomision(
                    $comision->getIdcomision()
            );
            $horarios[] = $horario;
        }
        //por cada comision tengo que buscar todos los horarios que contengan esa comision y guardarlas en horarios
        //podria crear un arreglo que contenga una comision y sus horarios y con un if solucionar el tema de muchos horarios
        //recorrer todas las comisiones y por cada una agregar a un arreglo grande un arreglo de la comision mas sus horarios  
        $datos = array();
        if ($form->isSubmitted()) {
            foreach ($horarios as $x) {
                foreach ($x as $horario) {
                    $data = array();
                    $data[] = $horario->getDiadia();
                    $data[] = $horario->getInicio();
                    $data[] = $horario->RestarHoras();
                    $datos[] = $data;
                }
            }
        }

        return $this->render('modulo/modulo2.html.twig', array(
                    'comisions' => $comisions,
                    'horarios' => $horarios,
                    'info' => $datos,
                    'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/modulo3", name="modulo3")
     */
    public function modulo3Action(Request $request) {
        $man = $this->getDoctrine()->getManager();

        $materias = $man->getRepository('AppBundle:Materia')->findAll();

        return $this->render('modulo/modulo3.html.twig', array(
                    'materias' => $materias,
        ));
    }

    /**
     * @Route("/resultados", name="resultados")
     */
    public function resultadosEncAction(Request $request) {
        
        //Defino hora local como la de Buenos Aires.
        date_default_timezone_set('America/Argentina/Buenos_Aires');
        //Obtengo esa hora local y la guardo en una variable
        $fechaActual = date_default_timezone_get();
        //Creo una nueva entidad de la encuesta 
        $encuesta = new Encuesta();
        //Reviso que el botón submit haya sido apretado para que no me de valores nulos    
        if (isset($_POST['submit'])) {
            if (isset($_POST['materia'])) {
                $encuesta->setMaterias(implode(',', $_POST['materia']));
                echo 'Seleccionaste las materias: ' . implode(', ',$_POST['materia']);
            }
            if (isset($_POST['turno'])){
                $encuesta->setIdTurno($_POST['turno']);
            }
        }
        //Creo un objetivo DateTime con la variable que contiene la hora local
        $encuesta->setFecha(new \DateTime($fechaActual));
        
        $mane = $this->getDoctrine()->getEntityManager();
        //Marca la entidad como persistente, todavia no ingresa los datos a la BD
        $mane->persist($encuesta);
        //Guardo los cambios (hago un "push")
        $mane->flush();
        
        //$encUsuario = new Encuestausuario();
        //$id = $encuesta->getIdencuesta();
        //$encUsuario->setIdencuesta($id);
        //$encUsuario->setIdusuario(12);
        //$mane->persist($encUsuario);
        //$mane->flush();
        
        die();
        //return $this->render('modulo/modulo3.html.twig', [
        //            'base_dir' => realpath($this->getParameter('kernel.project_dir')) . DIRECTORY_SEPARATOR,
        //]);
    }

    /**
     * @Route("/agregar_comisiones", name="agregar_comisiones")
     * @Method({"GET"})*/
    
    public function obtenerComisionesAction(Request $request){
        
        $codigo = $request->query->get('codigo');
        $em = $this->getDoctrine()->getManager();
        /*Busco las comisiones que concuerden con el id de la materia*/
	$materia = $em->getRepository('AppBundle:Materia')
                ->findOneBycodigo($codigo);
        $idMateria= $materia->getIdmateria();
        
        $comisiones= $em->getRepository('AppBundle:Comision')
                ->findBymateriamateria($idMateria);
        	
        /*Genero un json con las comisiones*/
        $jsondata = json_encode ($materia);
        
        $response = new Response(
			'Content',
			Response::HTTP_OK,
			array('conten-Type', 'text/html')
		);
		
//	$jsondata = json_encode($codigo);
		
	$response->setContent($jsondata);
	
	return $response->send();
    } 
}
