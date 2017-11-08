<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use AppBundle\Form\UserType;
use AppBundle\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use AppBundle\Entity\Comision;
use AppBundle\Entity\Materia;
use AppBundle\Entity\Horario;
use AppBundle\Entity\Dia;
use DateTime;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class DefaultController extends Controller {

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request) {
// replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
                    'base_dir' => realpath($this->getParameter('kernel.project_dir')) . DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/crearusuarios", name="crearUsuarios")
     */
    public function registerAction(Request $request, UserPasswordEncoderInterface $passwordEncoder) {
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
     * @Method({"GET", "POST"})
     */
    public function excelAction(Request $request) {
        $form = $this->createForm('AppBundle\Form\ExType');
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $path=realpath($request->server->get('DOCUMENT_ROOT').$request->getBasePath().'\uploads');
            $file = $form['attachment']->getData();
            $year = $form['year']->getData();
            $file->move($path, $file->getClientOriginalName());

            $file2 = $path.'/'.$file->getClientOriginalName();
            $phpExcelObject = $this->get('phpexcel')->createPHPExcelObject($file2);
            $sheet = $phpExcelObject->getActiveSheet()->toArray(null, true, true, true);
            $em = $this->getDoctrine()->getManager();
            $data['sheet'] = $sheet;
            foreach ($sheet as $i => $row) {
                if ($i == 1) {
                    $headings = $row;
                } else {
                    $row = array_combine($headings, $row);
                    $comision = new Comision();
                    $materia = new Materia();
                    $horario = new Horario();
                    $dia = new Dia();
                    $prueba=array();
 //                   $prueba=$headings;

                    $materia->setCodigo($row['Código']);
                    $bool = $em->getRepository('AppBundle:Materia')->findOneBy(array(
                        'codigo' => $materia->getCodigo()
                    ));
                    if ($bool != NULL) {
                        $materiaent = $em->getRepository('AppBundle:Materia')->findOneBy(array(
                            'codigo' => $materia->getCodigo()
                        ));
                        $dia->setNombre($row['Día']);                                       //evidentemente el error viene aca
                        $diaent = $em->getRepository('AppBundle:Dia')->findOneBy(array(
                                'nombre' =>$dia->getNombre()
                        ));
                        $comision->setCuatrimestre($row['Cuatrimestre']);
                        $comision->setNumero($row['Comisión']);
                        $comision->setProfesor($row['Docente']);
                        $comision->setYear($year);

                        $inicio = new DateTime(date(" H:i", strtotime($row['Hora Inicio'])));
                        $fin = new DateTime(date(" H:i", strtotime($row ['Hora Final'])));
                        $horario->setInicio($inicio);
                        $horario->setFin($fin);

                        $horario->setComisioncomision($comision);
                        $comision->setMateriamateria($materiaent);
                        $horario->setDiadia($diaent);

                        $em->persist($comision);
                        $em->persist($horario);
                        
                        $em->flush();
                        $prueba[]=$comision;
                    }
                        
                }
            }
            return $this->render('default/Uploadok.html.twig', array(
                        'data' => $data,
                        'prueba'=>$prueba,)
            );
        }
        return $this->render('default/UploadExcel.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/cuenta", name="cuenta")
     */
    public function cuentaAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $deleteForm = $this->createDeleteForm($user);
        $editForm = $this->createForm('AppBundle\Form\UserEditType', $user);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->get('email')->isValid() && $editForm->get('legajo')->isValid() && $editForm->get('carreracarrera')->isValid()) {
            $user->setEmail($editForm->get('email')->getData());

            $user->setLegajo($editForm->get('legajo')->getData());
            $user->setCarreracarrera($editForm->get('carreracarrera')->getData());
            $em->flush();

            return $this->redirectToRoute('cuenta', array('iduser' => $user->getIduser()));
        }
        return $this->render('cuenta.html.twig', array(
                    'user' => $user,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to delete a user entity.
     *
     * @param User $user The user entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(User $user) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('user_delete', array('iduser' => $user->getIduser())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

}
