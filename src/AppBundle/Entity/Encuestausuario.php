<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Encuestausuario
 *
 * @ORM\Table(name="encuestausuario", indexes={@ORM\Index(name="idUsuario_idx", columns={"idUsuario"}), @ORM\Index(name="idEncuesta_idx", columns={"idEncuesta"})})
 * @ORM\Entity
 */
class Encuestausuario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idEncuestaUsuario", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idencuestausuario;

    /**
     * @var \AppBundle\Entity\Encuesta
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Encuesta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEncuesta", referencedColumnName="idEncuesta")
     * })
     */
    private $idencuesta;

    /**
     * @var \AppBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUsuario", referencedColumnName="iduser")
     * })
     */
    private $idusuario;



    /**
     * Get idencuestausuario
     *
     * @return integer
     */
    public function getIdencuestausuario()
    {
        return $this->idencuestausuario;
    }

    /**
     * Set idencuesta
     *
     * @param \AppBundle\Entity\Encuesta $idencuesta
     *
     * @return Encuestausuario
     */
    public function setIdencuesta(\AppBundle\Entity\Encuesta $idencuesta = null)
    {
        $this->idencuesta = $idencuesta;
    
        return $this;
    }

    /**
     * Get idencuesta
     *
     * @return \AppBundle\Entity\Encuesta
     */
    public function getIdencuesta()
    {
        return $this->idencuesta;
    }

    /**
     * Set idusuario
     *
     * @param \AppBundle\Entity\User $idusuario
     *
     * @return Encuestausuario
     */
    public function setIdusuario(\AppBundle\Entity\User $idusuario = null)
    {
        $this->idusuario = $idusuario;
    
        return $this;
    }

    /**
     * Get idusuario
     *
     * @return \AppBundle\Entity\User
     */
    public function getIdusuario()
    {
        return $this->idusuario;
    }
}
