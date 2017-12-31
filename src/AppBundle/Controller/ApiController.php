<?php

namespace AppBundle\Controller;

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use AppBundle\Entity\Comision;
use AppBundle\Entity\Materia;
use AppBundle\Entity\Horario;
use AppBundle\Entity\Apiencuesta;
use AppBundle\Entity\Materiaencuesta;
use Symfony\Component\HttpFoundation\Response;
use JMS\Serializer\SerializerBuilder;
use AppBundle\Services\Helpers;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use AppBundle\Entity\User;

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
        $jsonContent = $serializer->serialize($materias, 'json');
        return new Response($jsonContent);
    }

    /**
     * @Route("/encuesta", name="encuesta")
     * @Method({"GET" ,"POST"})
     */
    public function EncuestaAction(Request $request) {
        $json = $request->request->get('json');
        $data = json_decode($json, true);
        $helpers = $this->get(Helpers::class);
        $em = $this->getDoctrine()->getManager();
        date_default_timezone_set('America/Argentina/Buenos_Aires');
        $encuesta = new Apiencuesta();
        $encuesta->setCreatedat(new \DateTime(date_default_timezone_get()));
        $id = $data[0]["id"];
        $user = $em->getRepository('AppBundle:User')->findOneByiduser($id);
        $encuesta->setIduser($user);
   
        for ($i = 1;$i<count($data);$i++) {
            
        
            $materia = $em->getRepository('AppBundle:Materia')->findOneByidmateria($data[$i]["idmateria"]);
            settype($data[$i]["turno"], "integer");

            $materiaencuesta = new Materiaencuesta();
            $materiaencuesta->setIdencuesta($encuesta);
            $materiaencuesta->setIdmateria($materia);
            $materiaencuesta->setTurno($data[$i]["turno"]);         
            
            $em->persist($materiaencuesta);
        }
 
        $em->persist($encuesta);
        $em->flush();
        $rta = array(
            'status' => 'success',
            'data' => 'La encuesta ha sido procesada'
        );

        return $helpers->json($rta);
    }

    /**
     * @Route("/resultado", name="resultado")
     * @Method({"GET" ,"POST"})
     */
    public function ResultadoAction(Request $request) {
        $json = $request->request->get('json');
        $data = json_decode($json, true);
        settype($data, "integer");
        $em = $this->getDoctrine()->getManager();
        $helpers = $this->get(Helpers::class);

        $materia = $em->getRepository('AppBundle:Materia')->findOneByidmateria($data);
        $resultados = $em->getRepository('AppBundle:Materiaencuesta')->findByidmateria($materia);
        $index1 = 0;
        $index2 = 0;
        $index3 = 0;
        foreach ($resultados as $r) {
            if ($r->getTurno() == 1) {
                $index1++;
            }
            if ($r->getTurno() == 2) {
                $index2++;
            }
            if ($r->getTurno() == 3) {
                $index3++;
            }
        }

        $respuesta = array(
            'materia' => $materia->getNombre(),
            'Tm' => $index1,
            'Tt' => $index2,
            'Tn' => $index3
        );
        return $helpers->json($respuesta);
    }

    /**
     * @Route("/registroapi", name="registroapi")
     * @Method({"GET" ,"POST"})
     */
    public function RegistroApiAction(Request $request, UserPasswordEncoderInterface $passwordEncoder) {
        $json = $request->request->get('json');
        $data = json_decode($json, true);
        $em = $this->getDoctrine()->getManager();
        $helpers = $this->get(Helpers::class);
        $user = new User();
        $user->setRolrol($em->getRepository('AppBundle:Rol')->findOneByrol('ROLE_USER'));
        $user->setEmail($data["email"]);
        $user->setUsername($data["username"]);
        $respuesta = array(
            'status' => 'error',
            'code' => '400',
            'msg' => 'Token is not valid'
        );

        $token = $em->getRepository('AppBundle:Token')->findOneBytoken($data["token"]);
        if ($token) {
            $password = $passwordEncoder->encodePassword($user, $data["password"]);
            $user->setPassword($password);
            $em->persist($user);
            $em->remove($token);
            $em->flush();
            $respuesta = array(
                'status' => 'success',
                'code' => '200',
                'msg' => 'Registro completado'
            );
        }

        return $helpers->json($respuesta);
    }

    /**
     * @Route("/loginapi", name="loginapi")
     * @Method({"GET" ,"POST"})
     */
    public function LoginApiAction(Request $request, UserPasswordEncoderInterface $passwordEncoder) {
        $json = $request->request->get('json');

        $params = json_decode($json, true);
        $em = $this->getDoctrine()->getManager();
        $helpers = $this->get(Helpers::class);
        $user = new User();
        $pwd = $passwordEncoder->encodePassword($user, $params["password"]);
        $rta = array(
            'status' => 'error',
            'code' => 400,
            'msg' => 'cuenta invalida'
        );
        $user = $em->getRepository('AppBundle:User')->findOneByusername($params["username"]);
        if ($user) {

            if ($passwordEncoder->isPasswordValid($user, $params["password"])) {
                $rta = array(
                    'status' => 'success',
                    'code' => 200,
                    'msg' => 'login valido',
                    'data' => $user->datos()
                );
            } else {
                $rta = array(
                    'status' => 'error',
                    'code' => 400,
                    'msg' => 'password incorrecto'
                );
            }
        }

        return $helpers->json($rta);
    }

}
