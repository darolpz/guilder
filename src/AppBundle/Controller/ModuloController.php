<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use AppBundle\Entity\Comision;
use AppBundle\Entity\Horario;
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
        //Reviso que el botón submit haya sido apretado para que no me de valores nulos    
        if (isset($_POST['submit'])) {
            //HTML toma el nombre "materia[]" como un nombre más pero PHP lo toma con array
            $materias = '';
            if (isset($_POST['materia'])) {
                //El implome me une valores de un array en 
                $materias = implode(',', $_POST['materia']);
                echo 'Seleccionaste las materias: ' . implode(', ', $_POST['materia']);
            }
        }
        die();
        return $this->render('modulo/modulo3.html.twig', [
                    'base_dir' => realpath($this->getParameter('kernel.project_dir')) . DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/agregar_comisiones", name="agregar_comisiones")
     * @Method({"GET"})*/
    
    public function obtenerComisionesAction(Request $request){
        
        $codigo = $request->query->get('codigo');
        //$em = $this->getDoctrine()->getManager();
        /*Busco las comisiones que concuerden con el id de la materia*/
	    //$materia = $em->getRepository('AppBundle:Materia')
		//->findOneBycodigo($codigo);
        //$idMateria= $materia.getIdmateria();
        //$comisiones= $em->getRepository('AppBundle:Comision')
        //        ->findBymateriamateria($idMateria);
//	if ($comisiones.is){                        Si el array de comisiones esta vacio deberia enviar un error
//            throw $this ->createNotFoundEsception(
//            'No product found for id '.$id
//            ); 
//	}
        /*Genero un json con las comisiones*/
        
        //$jsonencoded = json_encode ($comisiones);
//	$jsonencoded = json_encode ($comisiones, JSON_UNESCAPED_UNICODE);
        //return $jsonencoded;
//       return new JsonResponse($comisiones);
        //$codigo = json_decode($request->getContent());
        $response = new Response(
			'Content',
			Response::HTTP_OK,
			array('conten-Type', 'text/html')
		);
		
		$jsondata = json_encode($codigo);
		
		$response->setContent($jsondata);
		
		return $response->send();
		//echo $response;
    } 
}
