<?php

// src/AppBundle/Validator/ConstraintsTokenValidator.php
namespace AppBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Doctrine\ORM\EntityManagerInterface;

class TokenValidoValidator extends ConstraintValidator
{
	private $em;

    public function __construct(EntityManagerInterface $entitymanagerinterface)
    {
        $this->em = $entitymanagerinterface;
    }

    public function validate($value, Constraint $constraint)
    {
		$token = $this->em->getRepository('AppBundle:Token')->findBy(array('token' => $value));
        if (count($token) == 0)
		{
            $this->context->buildViolation($constraint->message)
                ->addViolation();
        }
    }
}