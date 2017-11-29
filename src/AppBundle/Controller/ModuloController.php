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
use AppBundle\Entity\Materiaelegida;
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
        
        foreach ($comisions as $comision){ 
            $horario = $em->getRepository('AppBundle:Horario')->findOneBycomisioncomision(
                    $comision->getIdcomision()
            );
            $horarios[] = $horario;
        }
        $comis = array();
        //creo un arreglo d forma de obtener todos los datos de la comision en un solo array
        for ($i = 0; $i < sizeof($comisions); $i++) {
            $array =[
                'numero' => $comisions[$i]->getNumero(),
                'profesor' => $comisions[$i]->getProfesor(),
                'year' => $comisions[$i]->getYear(),
                'cuatrimestre' => $comisions[$i]->getCuatrimestre(),
                'materia' => $comisions[$i]->getMateriamateria()->__toString(),
                'dia' => $horarios[$i]->getDiadia()->__toString(),
                'inicio' => date_format($horarios[$i]->getInicio(),'H:i'),
                'fin' => date_format($horarios[$i]->getFin(),'H:i'),
                'segundos' => $horarios[$i]->restarHoras(),
                
            ];
            $comis[] = $array;
        }

        return $this->render('modulo/modulo2.html.twig', array(
                    'comis' => $comis,
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
        if (isset($_POST['submit'])) {
            if (isset($_POST['turno'])){
                $datosRecibidos = $_POST['turno'];
            }      
        }

        $turnosElegidos = array();
        $materiasElegidas = array();
        //Recibo los datos como "IC002,1" entonces lo corto por la coma y separo codigo y turno.
        for($X = 0; $X < count($datosRecibidos); $X++)
        {
            $auxiliar = preg_split('~,~', $datosRecibidos[$X]);
            array_push($materiasElegidas, $auxiliar[0]);
            array_push($turnosElegidos, $auxiliar[1]);
        }
        
        $materia = new Materiaelegida();
        $mane = $this->getDoctrine()->getEntityManager();      
              
        //$user = $this->get('security.token_storage')->getToken()->getUser()->getIduser();
        //$user->getUsername();
        //var_dump($user);
        //die();
        
        //echo count($materiasElegidas);
        $asignaturas = array();
        for($A = 0; $A < count($materiasElegidas); $A++)
        {
            $materia = new Materiaelegida();
            $materia->setcodigoMateria($materiasElegidas[$A]);
            $materia->setTurno($turnosElegidos[$A]);
            $materia->setnombreMateria(null);
            // Luego de crear las materias las guardo en un array
            array_push($asignaturas, $materia);           
        }
        
        $encuesta = new Encuesta();
        //Defino hora local como la de Buenos Aires.
        date_default_timezone_set('America/Argentina/Buenos_Aires');
        //Obtengo esa hora local y la guardo en una variable
        $fechaActual = date_default_timezone_get();
        
        //Recorro el array con los objetos materias y los inyecto a la BD
        foreach($asignaturas as $una)
        {
            $mane->persist($una);
            $mane->flush();
        }
        /*foreach($asignaturas as $A)
        {
            $encuesta->setFecha($fechaActual);
            $id = $A->getIdmateriaelegida();
            $encuesta->setIdopcion($id);
            $mane->persist($encuesta);
            $mane->flush();
        }
        */
        
        return $this->redirectToRoute('homepage');        
    }
    
    /**
     * @Route("/ingresarMaterias", name="ingresarMaterias")
     * @Method({"GET"})
     */
    public function ingresarMateriaAction(int $posicion,array $materiasElegidas,array $turnosElegidos)
    {
        $materia = new Materiaelegida();
        $mane = $this->getDoctrine()->getEntityManager();
        
        $materia->setcodigoMateria($materiasElegidas[$posicion]);
        $materia->setTurno($turnosElegidos[$posicion]);
        $materia->setnombreMateria(null);
        $mane->persist($materia);
        $mane->flush();
        
        return var_dump($materia->getTurno());
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
            $comision[]=$horario->getInicio()->format('H');
            $comision[]=$horario->getInicio()->format('i');
            $comision[]=$horario->getFin()->format('H');
            $comision[]=$horario->getFin()->format('i');
            $comision[]=$horario->getDiadia()->getNombre();
            $comision[]=$materia->getNombre(); /*Buscar una mejor manera de pasar esta información*/
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
