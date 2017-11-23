<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Token;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use DateTime;

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
				 $dia = new DateTime();
				 $dia->format('Y-m-d H:i:s');
				 $dia->getTimestamp();
				 $token->setCreado($dia);
				 $token->setToken($random);
				 $em->persist($token);
				 $em->flush();
			}
			
		}
		while ($token == null);
		$tokens = $em->getRepository('AppBundle:Token')->findAll();
		$this->addFlash('tokencreado', $token->getToken());
		return $this->redirectToRoute('token_index');
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
		$this->addFlash('tokeneliminado', $token->getToken());
        return $this->redirectToRoute('token_index');
	}
}