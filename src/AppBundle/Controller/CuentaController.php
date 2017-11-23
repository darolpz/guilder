<?php

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\PasswordChange;
use AppBundle\Form\ChangePasswordType;
use AppBundle\Form\UserType;
use AppBundle\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


/**
 * Cuenta controller.
 *
 * @Route("cuenta")
 */
class CuentaController extends Controller {
	
	/**
     * @Route("/", name="cuenta_index")
	 * @Method({"GET", "POST"})
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

            return $this->redirectToRoute('cuenta_index', array('iduser' => $user->getIduser()));
        }
        return $this->render('cuenta/index.html.twig', array(
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
		/**
	*
	* @Route("/change-password", name="change_password")
	* @Method({"GET", "POST"})
	*/
	public function changePasswordAction(Request $request, UserPasswordEncoderInterface $passwordEncoder)
	{
		$changePasswordModel = new PasswordChange();
		$changePasswordModel->setUser($this->getUser());

		$form = $this->createForm('AppBundle\Form\ChangePasswordType', $changePasswordModel);

		$form->handleRequest($request);

		if($form->isSubmitted() && $form->get('password')->isValid() && $form->get('plainPassword')->isValid()) {
			$em = $this->getDoctrine()->getManager();
			$changePassword = $form->getData();

			//$factory = $this->get('security.encoder_factory');
			//$encoder = $factory->getEncoder($changePassword->getUser());
			$user = $this->getUser();
			$user->setPlainPassword($form["plainPassword"]->getData());
			//$password = $encoder->encodePassword($changePassword->getUser()->getPlainPassword(), $changePassword->getUser()->getSalt());

			//$changePassword->getUser()->setPassword($password);
			$password = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
			$user->setPassword($password);
			$em->persist($user);
			//$em->persist($changePassword->getUser());
			$em->flush();
			$this->addFlash('hecho', "se cambio la password");

        return $this->render('cuenta/change-password.html.twig', array(
                    'form' => $form->createView(),
        ));
		
		}
		        return $this->render('cuenta/change-password.html.twig', array(
                    'form' => $form->createView(),
        ));
	}
}