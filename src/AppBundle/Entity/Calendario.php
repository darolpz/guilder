<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Calendario
 *
 * @ORM\Table(name="calendario")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CalendarioRepository")
 */
class Calendario
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Comision")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="comsion_idcomision", referencedColumnName="idcomision")
     * })
     */
    private $comisioncomision;

    /**
     * @var integer
     *@ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_iduser", referencedColumnName="iduser")
     * })
     */
    private $useruser;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set comisioncomision
     *
     * @param integer $comisioncomision
     *
     * @return Calendario
     */
    public function setComisioncomision(\AppBundle\Entity\Comision $comisioncomision)
    {
        $this->comisioncomision = $comisioncomision;
    
        return $this;
    }

    /**
     * Get comisioncomision
     *
     * @return \AppBundle\Entity\Comision
     */
    public function getComisioncomision()
    {
        return $this->comisioncomision;
    }

    /**
     * Set useruser
     *
     * @param integer $useruser
     *
     * @return Calendario
     */
    public function setUseruser(\AppBundle\Entity\User $useruser)
    {
        $this->useruser = $useruser;
    
        return $this;
    }

    /**
     * Get useruser
     *
     * @return \AppBundle\Entity\User
     */
    public function getUseruser()
    {
        return $this->useruser;
    }
}

