<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Token;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Token controller.
 *
 * @Route("admin/token")
 */
class TokenController extends Controller
{
    /**
     * Lists all token entities.
     *
     * @Route("/", name="token_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $tokens = $em->getRepository('AppBundle:Token')->findAll();

        return $this->render('token/index.html.twig', array(
            'tokens' => $tokens, 
        ));
    }
	    /**
     * Creates a new token entity.
     *
     * @Route("/new", name="token_new")
     * @Method({"GET", "POST"})
     */
	public function createToken()
	{
		$em = $this->getDoctrine()->getManager();

		$token = null;
		do
		{
			$random = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"), 0, 5);
			if (count($em->getRepository('AppBundle:Token')->findBy(array('token' => $random))) == 0)
			{
				 $token = new Token();
				 $token->setCreado(null); // Se inserta la fecha de creación nula y MySQL se encarga de colocarla
				 $token->setToken($random);
				 $em->persist($token);
				 $em->flush();
			}
			
		}
		while ($token == null);
		$tokens = $em->getRepository('AppBundle:Token')->findAll();
		$this->addFlash('token', $token->getToken());
		return $this->render('token/index.html.twig', array(
			'tokens' => $tokens,
        ));
	}

   /**
     * Deletes a token entity.
     *
     * @Route("/delete={idtoken}", name="token_delete")
	* @Method({"GET", "POST"})
     */
    public function deleteAction(Request $request, Token $token)
    {
        $em = $this->getDoctrine()->getManager();
		if (count($em->getRepository('AppBundle:Token')->find($token->getIdtoken())) != 0)
		{
			$em->remove($token);
			$em->flush();
		}
        return $this->redirectToRoute('token_index');
	}
}