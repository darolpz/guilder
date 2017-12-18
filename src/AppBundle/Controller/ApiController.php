<?php

namespace AppBundle\Controller;

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use AppBundle\Entity\Comision;
use AppBundle\Entity\Horario;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HTTPFoundation\Session\Session;
use JMS\Serializer\SerializerBuilder;

/**
 * Api controller.
 *
 * @Route("api")
 */
class ApiController extends Controller {

    /**
     * @Route("/m2", name="m2")
     * @Method({"GET" ,"POST"})
     */
    public function Apim2Action(Request $request) {
        
        $json = $request->request->get('json');
        $data = json_decode($json, true);

        $materia = $data['idmateria'];
        $year = $data['year'];
        $cuatri = $data['cuatrimestre'];
        
        $em = $this->getDoctrine()->getManager();
        if ($year == null) {//Caso 1,la comision no tiene año
            if ($cuatri == null) {//no tiene año y no tiene cuatrimestre
                $comisions = $em->getRepository('AppBundle:Comision')->
                        findBymateriamateria($materia);
            } else {//no tiene año pero tiene cuatrimestre
                $comisions = $em->getRepository('AppBundle:Comision')->findBy(array(
                    'materiamateria' => $materia,
                    'cuatrimestre' => $cuatri
                ));
            }
        } else {            //caso 2,la tiene año
            if ($cuatri == null) {//la comision tiene año pero no tiene acuatrimestre
                $comisions = $em->getRepository('AppBundle:Comision')->findBy(array(
                    'materiamateria' => $materia,
                    'year' => $year,
                ));
            } else {//la comision tiene año y cuatrimestre
                $comisions = $em->getRepository('AppBundle:Comision')->findBy(array(
                    'materiamateria' => $materia,
                    'year' => $year,
                    'cuatrimestre' => $cuatri
                ));
            }
        }
        $horarios = array();
        foreach ($comisions as $comision) {
            $horario = $em->getRepository('AppBundle:Horario')->findOneBycomisioncomision(
                    $comision->getIdcomision()
            );
            $horarios[] = $horario;
        }

        $comis = array();
        for ($i = 0; $i < sizeof($comisions); $i++) {
            $array = [
                'numero' => $comisions[$i]->getNumero(),
                'profesor' => $comisions[$i]->getProfesor(),
                'year' => $comisions[$i]->getYear(),
                'cuatrimestre' => $comisions[$i]->getCuatrimestre(),
                'materia' => $comisions[$i]->getMateriamateria()->__toString(),
                'dia' => $horarios[$i]->getDiadia()->__toString(),
                'inicio' => date_format($horarios[$i]->getInicio(), 'H:i'),
                'fin' => date_format($horarios[$i]->getFin(), 'H:i'),
                'segundos' => $horarios[$i]->restarHoras(),
            ];
            $comis[] = $array;
        }


        $jsonContent = json_encode($comis, JSON_UNESCAPED_UNICODE);



        return new Response($jsonContent);
    }
    
        /**
     * @Route("/getmaterias", name="getmaterias")
     * @Method({"GET" })
     */
    public function getMateriasAction() {
        $em = $this->getDoctrine()->getManager();
        $materias = $em->getRepository('AppBundle:Materia')->findAll();
        $serializer = SerializerBuilder::create()->build();
        $jsonContent = $serializer->serialize($materias,'json');
        return new Response($jsonContent);
        
    }

}
