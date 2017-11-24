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

        $materias = $em->getRepository('AppBundle:Materia')->findAll();

        return $this->render('modulo/modulo1.html.twig', array(
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
     * @Route("/modulo3B", name="modulo3B")
     */
    public function modulo3BAction(Request $request) {
        
        return $this->render('modulo/modulo3B.html.twig');
    }
    
    /**
     * @Route("/encuesta1", name="encuesta1")
     */
    public function encuesta1Action(Request $request) {
        
        //Reviso que el botón submit haya sido apretado para que no me de valores nulos
        if (isset($_POST['submit'])) {
            if (isset($_POST['materia'])) {
                $listaMaterias = $_POST['materia'];
            }
            //if (isset($_POST['turno'])){
            //    $encuesta->setIdTurno($_POST['turno']);
            //}
        }
        $materiasSeleccionadas = array();
        $em = $this->getDoctrine()->getEntityManager();
        for($X = 0; $X < count($listaMaterias); $X++)
        {
            $mat = $em->getRepository('AppBundle:Materia')->findOneBycodigo($listaMaterias[$X]);
            $nombreMateria = $mat->getNombre(); 
            array_push($materiasSeleccionadas, $nombreMateria);
        }
        return $this->render('modulo/modulo3B.html.twig', array(
            'codigosMaterias' => $_POST['materia'], 'nombresMaterias' => $materiasSeleccionadas
        ));
    }
    
    /**
     * @Route("/encuesta2", name="encuesta2")
     */
    public function encuesta2Action(Request $request) {
        
        //Defino hora local como la de Buenos Aires.
        date_default_timezone_set('America/Argentina/Buenos_Aires');
        //Obtengo esa hora local y la guardo en una variable
        $fechaActual = date_default_timezone_get();
        //Creo una nueva entidad de la encuesta 
        //$encuesta = new Encuesta();
        
        if (isset($_POST['submit'])) {
            if (isset($_POST['turno'])){
            //   $encuesta->setIdTurno($_POST['turno']);
            }       
        }
        //Creo un objetivo DateTime con la variable que contiene la hora local
        //$encuesta->setFecha(new \DateTime($fechaActual));
        
        //$mane = $this->getDoctrine()->getEntityManager();
        //Marca la entidad como persistente, todavia no ingresa los datos a la BD
        //$mane->persist($encuesta);
        //Guardo los cambios (hago un "push")
        //$mane->flush();
        
        //$encUsuario = new Encuestausuario();
        //$id = $encuesta->getIdencuesta();
        //$encUsuario->setIdencuesta($id);
        //$encUsuario->setIdusuario(12);
        //$mane->persist($encUsuario);
        //$mane->flush();
        return $this->render('default/index.html.twig');
        
    }

    /**
     * @Route("/agregar_comisiones", name="agregar_comisiones")
     * @Method({"GET"})
     */
    
    public function obtenerComisionesAction(Request $request){
        
        $codigo = $request->query->get('codigo');
        $em = $this->getDoctrine()->getManager();
        /*Busco las comisiones que concuerden con el id de la materia*/
	$materia = $em->getRepository('AppBundle:Materia')
                ->findOneBycodigo($codigo);
        $idMateria= $materia->getIdmateria();
        
        $comisiones= $em->getRepository('AppBundle:Comision')
                ->findBymateriamateria($idMateria);
        $comiArray= array();
        foreach ($comisiones as $c){
            /*Para cada comision del array $comisiones recupero los datos relevantes para el usuario
            Estos datos se añaden a un array temporal y luego se añaden al array $comiArray */
            $comision = array(); 
            $comision[]=$c->getProfesor();
            $comision[]=$c->getNumero();
            $horario=$em->getRepository('AppBundle:Horario')
                    ->findOneByComisioncomision($c);
            $comision[]=$horario->getInicio();
            $comision[]=$horario->getFin();
            $comision[]=$horario->getDiadia()->getNombre();
            $comiArray[]=$comision;
        }
        /*Genero un json con las comisiones. El JSON no esta validado. ¿Por qué? */
        $jsondata = json_encode ($comiArray);
        $response = new Response(
			'Content',
			Response::HTTP_OK,
			array('conten-Type', 'text/html')
		);
		
	$response->setContent($jsondata);
	
	return $response;
    } 
}
