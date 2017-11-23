<?php

namespace AppBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\Validator\Constraints as SecurityAssert;
class PasswordChange {

/**
 * @Assert\Type(type="AppBundle\Entity\User")
 * @Assert\Valid()
 */
protected $user;

/**
 * @SecurityAssert\UserPassword(
 *     message = "Password ingresada incorrecta"
 * )
 */
 protected $password;

/**
 * @Assert\Length(
 *     min = 4,
 *     minMessage = "La password deberia tener al menos 4 caracteres"
 * )
 */
 protected $plainPassword;

public function setUser(User $user)
{
    $this->user = $user;
}

public function getUser()
{
    return $this->user;
}

public function setPassword($password) {

    $this->password = $password;

    return $this;
}

public function getPassword() {

    return $this->password;
}

public function setPlainPassword($plainPassword) {

    $this->plainPassword = $plainPassword;

    return $this;
}

public function getPlainPassword() {

    return $this->plainPassword;
}
}