<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Materiaencuesta
 *
 * @ORM\Table(name="materiaencuesta", indexes={@ORM\Index(name="idEncuesta", columns={"idEncuesta"}), @ORM\Index(name="idMateria", columns={"idMateria"})})
 * @ORM\Entity
 */
class Materiaencuesta
{
    /**
     * @var integer
     *
     * @ORM\Column(name="turno", type="integer", nullable=false)
     */
    private $turno;

    /**
     * @var integer
     *
     * @ORM\Column(name="idEncuestaMateria", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idencuestamateria;

    /**
     * @var \AppBundle\Entity\Apiencuesta
     *
     *
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Apiencuesta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEncuesta", referencedColumnName="idEncuesta")
     * })
     */
    private $idencuesta;

    /**
     * @var \AppBundle\Entity\Materia
     *
     *
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Materia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idMateria", referencedColumnName="idmateria")
     * })
     */
    private $idmateria;



    /**
     * Set turno
     *
     * @param integer $turno
     *
     * @return Materiaencuesta
     */
    public function setTurno($turno)
    {
        $this->turno = $turno;

        return $this;
    }

    /**
     * Get turno
     *
     * @return integer
     */
    public function getTurno()
    {
        return $this->turno;
    }

    /**
     * Set idencuestamateria
     *
     * @param integer $idencuestamateria
     *
     * @return Materiaencuesta
     */
    public function setIdencuestamateria($idencuestamateria)
    {
        $this->idencuestamateria = $idencuestamateria;

        return $this;
    }

    /**
     * Get idencuestamateria
     *
     * @return integer
     */
    public function getIdencuestamateria()
    {
        return $this->idencuestamateria;
    }

    /**
     * Set idencuesta
     *
     * @param \AppBundle\Entity\Apiencuesta $idencuesta
     *
     * @return Materiaencuesta
     */
    public function setIdencuesta(\AppBundle\Entity\Apiencuesta $idencuesta)
    {
        $this->idencuesta = $idencuesta;

        return $this;
    }

    /**
     * Get idencuesta
     *
     * @return \AppBundle\Entity\Apiencuesta
     */
    public function getIdencuesta()
    {
        return $this->idencuesta;
    }

    /**
     * Set idmateria
     *
     * @param \AppBundle\Entity\Materia $idmateria
     *
     * @return Materiaencuesta
     */
    public function setIdmateria(\AppBundle\Entity\Materia $idmateria)
    {
        $this->idmateria = $idmateria;

        return $this;
    }

    /**
     * Get idmateria
     *
     * @return \AppBundle\Entity\Materia
     */
    public function getIdmateria()
    {
        return $this->idmateria;
    }
}
