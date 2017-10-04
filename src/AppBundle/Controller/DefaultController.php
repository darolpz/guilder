<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\UserType;
use AppBundle\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

use AppBundle\Entity\Comision;
use AppBundle\Entity\Materia;
use AppBundle\Entity\Horario;
use AppBundle\Entity\Dia;

use DateTime;
class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/crearusuarios", name="crearUsuarios")
     */
     public function registerAction(Request $request, UserPasswordEncoderInterface $passwordEncoder)
     {
         // 1) build the form
         $user = new User();
         $user->setUsername("usuario1");
         $user->setPlainPassword("1234");
         $rol = $this->getDoctrine()->getRepository('AppBundle:Rol')->findOneByrol('ROLE_USER');
         $user->setRolrol($rol);
        // 3) Encode the password (you could also do this via Doctrine listener)
        $password = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
        $user->setPassword($password);
        // 4) save the User!
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();
 

        $user1 = new User();
        $user1->setUsername("admin1");
        $user1->setPlainPassword("1234");
        $rol = $this->getDoctrine()->getRepository('AppBundle:Rol')->findOneByrol('ROLE_ADMIN');
        $user1->setRolrol($rol);
        $password = $passwordEncoder->encodePassword($user, $user1->getPlainPassword());
        $user1->setPassword($password);
        // 4) save the User!
        $em = $this->getDoctrine()->getManager();
        $em->persist($user1);
        $em->flush();
 
        return $this->redirectToRoute('homepage');
     }
     
     /**
     * @Route("/excel", name="excel")
     */
    public function excelAction()
    {
        $data = [];
        $appPath = $this->container->getParameter('kernel.root_dir');
        $file = realpath($appPath . '/../web/excelFiles/info1.xlsx');

        $phpExcelObject = $this->get('phpexcel')->createPHPExcelObject($file);
        $sheet = $phpExcelObject->getActiveSheet()->toArray(null, true, true, true);

        $em = $this->getDoctrine()->getManager();
        $data['sheet'] = $sheet;
        //READ EXCEL FILE CONTENT
        foreach($sheet as $i=>$row) {
        if($i !== 1) {

            $comision = new Comision();
            $materia = new Materia();
            $horario = new Horario();
            $dia = new Dia();
            
            $materia ->setCodigo($row['D']);
            $bool = $em->getRepository('AppBundle:Materia')->findOneBy(array(
               'codigo'=>$materia->getCodigo()
               ));
            if($bool!=NULL){
            $materiaent = $em->getRepository('AppBundle:Materia')->findOneBy(array(
               'codigo'=>$materia->getCodigo()
               ));
            $dia ->setNombre($row['K']);
            $diaent = $em->getRepository('AppBundle:Dia')->findOneBy(array(
               'nombre'=>$dia->getNombre()
               ));
            
           
            $comision ->setCuatrimestre($row['B']);
            //$comision ->setCuatrimestre(1);
            $comision ->setNumero($row['G']);
            $comision ->setProfesor($row ['H']);
            $comision ->setYear(2017);
            
            $inicio=new DateTime(date(" H:i", strtotime($row ['L'])));
            $fin = new DateTime(date(" H:i", strtotime($row ['M'])));
            $horario ->setInicio($inicio);
            $horario ->setFin($fin);          
            
            $horario ->setComisioncomision($comision);
            
            $comision ->setMateriamateria($materiaent);
            $horario ->setDiadia($diaent);
            
            $em->persist($comision);
            $em->persist($horario);
            $em->flush();
            }
            }
        }
        $data['obj'] = $phpExcelObject;
        return $this->render('default/index.html.twig', ['data' => $data ] );
    }
}
