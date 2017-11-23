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
/**
 * Admin controller.
 *
 * @Route("admin")
 */
class AdminController extends Controller
{
    /**
     * @Route("/", name="admin")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('admin/index.html.twig');
    }
     /**
     * @Route("/excel", name="excel")
     * @Method({"GET", "POST"})
     */
    public function excelAction(Request $request) {
        $form = $this->createForm('AppBundle\Form\ExType');
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $path = realpath($request->server->get('DOCUMENT_ROOT') . $request->getBasePath() . '\uploads');
            $file = $form['attachment']->getData();
            $year = $form['year']->getData();
            $file->move($path, $file->getClientOriginalName());

            $file2 = $path . '/' . $file->getClientOriginalName();
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
                    $materia->setCodigo($row['Código']);
                    $bool = $em->getRepository('AppBundle:Materia')->findOneBy(array(
                        'codigo' => $materia->getCodigo()
                    ));
                    if ($bool != NULL) {
                        $materiaent = $em->getRepository('AppBundle:Materia')->findOneBy(array(
                            'codigo' => $materia->getCodigo()
                        ));
                        $dia->setNombre($row['Dia']);                                       //evidentemente el error viene aca
                        $diaent = $em->getRepository('AppBundle:Dia')->findOneBy(array(
                            'nombre' => $dia->getNombre()
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
                    }
                }
            }
            return $this->render('default/Uploadok.html.twig', array(
                        'data' => $data,
                            )
            );
        }
        return $this->render('default/UploadExcel.html.twig', array(
                    'form' => $form->createView(),
        ));
    }
	
} 