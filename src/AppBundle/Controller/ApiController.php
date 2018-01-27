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
use AppBundle\Entity\Token;
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
     * @Route("/getMaterias", name="getmaterias")
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

        for ($i = 1; $i < count($data); $i++) {


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
     * @Route("/registro", name="apiRegistro")
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
     * @Route("/login", name="apiLogin")
     * @Method({"GET" ,"POST"})
     */
    public function LoginApiAction(Request $request, UserPasswordEncoderInterface $passwordEncoder) {
        $json = $request->request->get('json');

        $params = json_decode($json, true);
        $em = $this->getDoctrine()->getManager();
        $helpers = $this->get(Helpers::class);
        $user = new User();
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

    /**
     * @Route("/getTokens", name="getTokens")
     * @Method({"GET"})
     */
    public function getTokensAction() {
        $em = $this->getDoctrine()->getManager();
        $tokens = $em->getRepository('AppBundle:Token')->findAll();
        $serializer = SerializerBuilder::create()->build();
        $jsonContent = $serializer->serialize($tokens, 'json');
        return new Response($jsonContent);
    }

    /**
     * @Route("/deleteToken", name="deleteToken")
     * @Method({"GET","POST"})
     */
    public function deleteTokensAction(Request $request) {
        $json = $request->request->get('json');
        $id = json_decode($json, true);
        $helpers = $this->get(Helpers::class);
        $em = $this->getDoctrine()->getManager();
        $token = $em->getRepository('AppBundle:Token')->findOneByidtoken($id);
        $rta = array(
            'status' => 'error',
            'code' => 400,
            'msj' => 'token no encontrado'
        );
        if ($token) {
            $em->remove($token);
            $em->flush();
            $rta = array(
                'status' => 'success',
                'code' => 200,
                'msj' => 'token eliminado'
            );
        }
        return $helpers->json($rta);
    }

    /**
     * @Route("/createToken", name="createToken")
     * @Method({"GET","POST"})
     */
    public function createTokensAction() {

        $em = $this->getDoctrine()->getManager();
        $helpers = $this->get(Helpers::class);
        $rta = array(
            'status' => 'error',
            'code' => 400,
            'msj' => 'token no creado'
        );
        
        $random = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"), 0, 5);
        if(!$em->getRepository('AppBundle:Token')->findOneBytoken($random)) {
            $token = new Token();
            $token->setCreado(new \DateTime(date_default_timezone_get()));
            $token->setToken($random);
            $em->persist($token);
            $em->flush();
            $rta = array(
                'status' => 'success',
                'code' => 200,
                'msj' => 'token creado',
                'data' => $token
            );
        }
        return $helpers->json($rta);
        
    }

    /**
     * @Route("/changePass", name="changepass")
     * @Method({"GET","POST"})
     */
    public function changePassAction(Request $request, UserPasswordEncoderInterface $passwordEncoder){
        $id = $request->request->get('id');
        $oldpass = $request->request->get('oldpass');
        $newpass = $request->request->get('newpass');
        $em = $this->getDoctrine()->getManager();
        $helpers = $this->get(Helpers::class);
        $user = $em->getRepository('AppBundle:User')->findOneByiduser($id);
        $rta = array(
            'status' => 'error',
            'code' => 400,
            'msj' => 'Contraseña invalida'
        );
        if($passwordEncoder->isPasswordValid($user, $oldpass)){
            
            $pwd = $passwordEncoder->encodePassword($user, $newpass);
            $user->setPassword($pwd);
            $em->persist($user);
            $em->flush();
            
            $rta = array(
            'status' => 'success',
            'code' => 200,
            'msj' => 'Contraseña actualizada'
        );
        }
        
        return $helpers->json($rta);
    }
    
     /**
     * @Route("/changeEmail", name="changeemail")
     * @Method({"GET","POST"})
     */
    public function changeEmailAction(Request $request, UserPasswordEncoderInterface $passwordEncoder){
        $id = $request->request->get('id');
        $pass = $request->request->get('pass');
        $email = $request->request->get('email');
        $em = $this->getDoctrine()->getManager();
        $helpers = $this->get(Helpers::class);
        $user = $em->getRepository('AppBundle:User')->findOneByiduser($id);
        $rta = array(
            'status' => 'error',
            'code' => 400,
            'msj' => 'Contraseña invalida'
        );
        if($passwordEncoder->isPasswordValid($user, $pass)){

            $user->setEmail($email);
            $em->persist($user);
            $em->flush();
            
            $rta = array(
            'status' => 'success',
            'code' => 200,
            'msj' => 'Contraseña actualizada'
        );
        }
        
        return $helpers->json($rta);
    }
    
    /**
     * @Route("/allComisions", name="allComisions")
     * @Method({"GET"})
     */
    public function getAllComisionsAction(){
        $em = $this->getDoctrine()->getManager();
        $comisiones = $em->getRepository('AppBundle:Comision')->findAll();
        $serializer = SerializerBuilder::create()->build();
        $jsonContent = $serializer->serialize($comisiones, 'json');
        return new Response($jsonContent);
    }
    
    /**
     * @Route("/getUsers", name="getUsers")
     * @Method({"GET"})
     */
    public function getUserssAction(){
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('AppBundle:User')->findAll();
        $serializer = SerializerBuilder::create()->build();
        $jsonContent = $serializer->serialize($users, 'json');
        return new Response($jsonContent);
    }
    /**
     * @Route("/getHorarios", name="getHorarios")
     * @Method({"GET"})
     */
    public function getHorariosAction(){
        $em = $this->getDoctrine()->getManager();
        $horarios = $em->getRepository('AppBundle:Horario')->findAll();
        $serializer = SerializerBuilder::create()->build();
        $jsonContent = $serializer->serialize($horarios, 'json');
        return new Response($jsonContent);
    }
    
    /**
     * @Route("/deleteComision", name="deleteComision")
     * @Method({"GET","POST"})
     */
    public function deleteComisionAction(Request $request){
        $id = $request->request->get('id');
        $em = $this->getDoctrine()->getManager();
        $helpers = $this->get(Helpers::class);
        $comision = $em->getRepository('AppBundle:Comision')->findOneByidcomision($id);
        $rta = array(
            'status' => 'error',
            'code' => 400,
            'msj' => 'Comision invalida '
        );
        if($comision){
            $horario = $em->getRepository('AppBundle:Horario')->findOneBycomisioncomision($comision);
            if($horario){
                $em->remove($horario);
            }
            $em->remove($comision);
            $em->flush();
            $rta = array(
                'status' => 'success',
                'code' => '200',
                'msg' => 'Comision borrada exitosamente '
            );
        }
        
        return $helpers->json($rta); 
    }
    /**
     * @Route("/deleteHorario", name="deleteHorario")
     * @Method({"GET","POST"})
     */
    public function deleteHorarioAction(Request $request){
        $id = $request->request->get('id');
        $em = $this->getDoctrine()->getManager();
        $helpers = $this->get(Helpers::class);
        $horario = $em->getRepository('AppBundle:Horario')->findOneByidhorario($id);
        $rta = array(
            'status' => 'error',
            'code' => 400,
            'msj' => 'Horario invalida '
        );
        if($horario){         
            $em->remove($horario);
            $em->flush();
            $rta = array(
                'status' => 'success',
                'code' => '200',
                'msg' => 'Horario borrado exitosamente '
            );
        }
        
        return $helpers->json($rta); 
    }
    
    /**
     * @Route("/deleteUser", name="deleteUser")
     * @Method({"GET","POST"})
     */
    public function deleteUserAction(Request $request){
        $id = $request->request->get('id');
        $em = $this->getDoctrine()->getManager();
        $helpers = $this->get(Helpers::class);
        $user = $em->getRepository('AppBundle:User')->findOneByiduser($id);
        $rta = array(
            'status' => 'error',
            'code' => 400,
            'msj' => 'Usuario invalida '
        );
        if($user){         
            $em->remove($user);
            $em->flush();
            $rta = array(
                'status' => 'success',
                'code' => '200',
                'msg' => 'Usuario borrado exitosamente '
            );
        }
        
        return $helpers->json($rta); 
    }
    
    /**
     * @Route("/createComision", name="createComision")
     * @Method({"GET","POST"})
     */
    public function createComsionAction(Request $request){
        $json = $request->request->get('json');
        $data = json_decode($json, true);
        $em = $this->getDoctrine()->getManager();
        $helpers = $this->get(Helpers::class);
        $rta = array(
            'status' => 'error',
            'code' => 400,
            'msj' => 'No se ha podido crear la comision '
        );
        $materia = $em->getRepository('AppBundle:Materia')->findOneByidmateria($data["idmateria"]);
        if($materia){
            $comision = new Comision();
            $comision->setCuatrimestre($data["cuatrimestre"]);
            $comision->setMateriamateria($materia);
            $comision->setNumero($data["numero"]);
            $comision->setProfesor($data["profesor"]);
            $comision->setYear($data["year"]);
            
            $rta = array(
                'status' => 'success',
                'code' => '200',
                'msg' => 'Comision creada exitosamente '
            );
            $em->persist($comision);
            $em->flush();
        }
        
        return $helpers->json($rta); 
    }
    
    /**
     * @Route("/createHour", name="createHour")
     * @Method({"GET","POST"})
     */
    public function createHourAction(Request $request){
        $json = $request->request->get('json');
        $data = json_decode($json, true);
        $em = $this->getDoctrine()->getManager();
        $helpers = $this->get(Helpers::class);
        $rta = array(
            'status' => 'error',
            'code' => 400,
            'msj' => 'No se ha podido crear el horario '
        );
        
        $dia = $em->getRepository('AppBundle:Dia')->findOneBynombre($data["dia"]);
        $inicio = date_create_from_format('H:i',$data["inicio"]);
        $fin = date_create_from_format('H:i',$data["fin"]);
        $comision = $em->getRepository('AppBundle:Comision')->findOneByidcomision($data["comision"]);
        if($inicio && $fin && $comision && $dia){
            $horario = new Horario();
            $horario->setComisioncomision($comision);
            $horario->setDiadia($dia);
            $horario->setInicio($inicio);
            $horario->setFin($fin);
            
            $em->persist($horario);
            $em->flush();
            
            $rta = array(
                'status' => 'success',
                'code' => '200',
                'msg' => 'Horario creada exitosamente '
            );
        }

        return $helpers->json($rta);
    }
    
    /**
     * @Route("/getComision", name="getComision")
     * @Method({"GET","POST"})
     */
    public function getComisionAction(Request $request){
        $id = $request->request->get('id');
        $em = $this->getDoctrine()->getManager();
        $comision = $em->getRepository('AppBundle:Comision')->findOneByIdcomision($id);
        $serializer = SerializerBuilder::create()->build();
        $jsonContent = $serializer->serialize($comision, 'json');
        return new Response($jsonContent);
        
    }
    
    /**
     * @Route("/editComision", name="editComision")
     * @Method({"GET","POST"})
     */
    public function editComisionAction(Request $request){
        $json = $request->request->get('json');
        $data = json_decode($json, true);
        $id = $request->request->get('id');
        $helpers = $this->get(Helpers::class);
        $em = $this->getDoctrine()->getManager();
        
        $rta = array(
            'status' => 'error',
            'code' => 400,
            'msj' => 'No se ha podido modificar la comision '
        );

        $comision = $em->getRepository('AppBundle:Comision')->findOneByidcomision($id);
        $materia = $em->getRepository('AppBundle:Materia')->findOneByidmateria($data["idmateria"]);
        if($comision && $materia){
            
            $comision->setNumero($data["numero"]);
            $comision->setProfesor($data["profesor"]);
            $comision->setCuatrimestre($data["cuatrimestre"]);
            $comision->setYear($data["year"]);
            $comision->setMateriamateria($materia);
            
            $em->persist($comision);
            $em->flush();
            
            $rta = array(
                'status' => 'success',
                'code' => 200,
                'msj' => 'La comision se ha modificado exitosamente '
            );
        }

        return $helpers->json($rta);
    }
    
}
