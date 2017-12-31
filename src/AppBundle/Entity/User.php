<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use AppBundle\Validator\Constraints as Validacion;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * User
 *
 * @ORM\Table(name="user", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_2DA17977F85E0677", columns={"username"})}, indexes={@ORM\Index(name="fk_user_carrera1_idx", columns={"carrera_idcarrera"}), @ORM\Index(name="fk_user_rol1_idx", columns={"rol_idrol"})})
 * @ORM\Entity
 * @UniqueEntity(fields={"username"}, message="Nombre de usuario en uso")
 */
class User implements UserInterface, \Serializable, AdvancedUserInterface {

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=25, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=64, nullable=false)
     * @Assert\Length(
     *     min = 4,
     *     minMessage = "La password deberia tener al menos 4 caracteres"
     * )
     */
    private $password;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=false)
     */
    private $isActive;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=true)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="legajo", type="integer", nullable=true)
     */
    private $legajo;

    /**
     * @var integer
     *
     * @ORM\Column(name="iduser", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iduser;

    /**
     * @var \AppBundle\Entity\Carrera
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Carrera")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="carrera_idcarrera", referencedColumnName="idcarrera")
     * })
     */
    private $carreracarrera;

    /**
     * @var \AppBundle\Entity\Rol
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Rol")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rol_idrol", referencedColumnName="idrol")
     * })
     */
    private $rolrol;

    /**
     * @Assert\NotBlank
     * @Validacion\TokenValido

     */
    private $token;

    public function setToken($token) {
        $this->token = $token;
    }

    public function getToken() {
        return $this->token;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return User
     */
    public function setUsername($username) {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password) {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return User
     */
    public function setIsActive($isActive) {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean
     */
    public function getIsActive() {
        return $this->isActive;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email) {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Set legajo
     *
     * @param integer $legajo
     *
     * @return User
     */
    public function setLegajo($legajo) {
        $this->legajo = $legajo;

        return $this;
    }

    /**
     * Get legajo
     *
     * @return integer
     */
    public function getLegajo() {
        return $this->legajo;
    }

    /**
     * Get iduser
     *
     * @return integer
     */
    public function getIduser() {
        return $this->iduser;
    }

    /**
     * Set carreracarrera
     *
     * @param \AppBundle\Entity\Carrera $carreracarrera
     *
     * @return User
     */
    public function setCarreracarrera(\AppBundle\Entity\Carrera $carreracarrera = null) {
        $this->carreracarrera = $carreracarrera;

        return $this;
    }

    /**
     * Get carreracarrera
     *
     * @return \AppBundle\Entity\Carrera
     */
    public function getCarreracarrera() {
        return $this->carreracarrera;
    }

    /**
     * Set rolrol
     *
     * @param \AppBundle\Entity\Rol $rolrol
     *
     * @return User
     */
    public function setRolrol(\AppBundle\Entity\Rol $rolrol = null) {
        $this->rolrol = $rolrol;

        return $this;
    }

    /**
     * Get rolrol
     *
     * @return \AppBundle\Entity\Rol
     */
    public function getRolrol() {
        return $this->rolrol;
    }

    public function __toString() {
        return $this->username;
    }

    /**
     * @var string
     * @Assert\Length(
     *     min = 4,
     *     minMessage = "La password deberia tener al menos 4 caracteres"
     * )
     */
    private $plainPassword;

    public function getPlainPassword() {
        return $this->plainPassword;
    }

    public function setPlainPassword($password) {
        $this->plainPassword = $password;
    }

    public function eraseCredentials() {
        
    }

    /** @see \Serializable::serialize() */
    public function serialize() {
        return serialize(array(
            $this->iduser,
            $this->username,
            $this->password,
            $this->isActive,
            $this->rolrol,
            $this->carreracarrera,
            $this->email,
            $this->legajo,
                // see section on salt below
                // $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized) {
        list (
                $this->iduser,
                $this->username,
                $this->password,
                $this->isActive,
                $this->rolrol,
                $this->carreracarrera,
                $this->email,
                $this->legajo,
                // see section on salt below
                // $this->salt
                ) = unserialize($serialized);
    }

    public function isAccountNonExpired() {
        return true;
    }

    public function isAccountNonLocked() {
        return true;
    }

    public function isCredentialsNonExpired() {
        return true;
    }

    public function isEnabled() {
        return $this->isActive;
    }

    public function getSalt() {
        return null;
    }

    public function getRoles() {
        return [$this->rolrol->getRol()];
    }

    public function __construct() {
        $this->isActive = true;
        // may not be needed, see section on salt below
        // $this->salt = md5(uniqid('', true));
    }

    public function datos() {
        return $array = array(
            'id' => $this->getIduser(),
            'username' => $this->getUsername(),
            'email' => $this->getEmail(),
            'rol' => $this->getRolrol()->getRol(),
            'iat' => time(),
            'exp' => time() + (7 * 24 * 60 * 60)
        );
    }

}
