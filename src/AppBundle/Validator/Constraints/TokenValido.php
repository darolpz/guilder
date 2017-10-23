<?php

// src/AppBundle/Validator/Constraints/TokenValido.php
namespace AppBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class TokenValido extends Constraint
{
    public $message = 'El código/token ingresado no es válido';
	
	public function validatedBy()
	{
		return TokenValidoValidator::class;
	}
}

