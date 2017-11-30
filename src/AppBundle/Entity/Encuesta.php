<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Encuesta
 *
 * @ORM\Table(name="encuesta", indexes={@ORM\Index(name="idMateriaElegida_idx", columns={"idMateriaElegida"})})
 * @ORM\Entity
 */
class Encuesta
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var integer
     *
     * @ORM\Column(name="turno", type="integer", nullable=false)
     */
    private $turno;

    /**
     * @var integer
     *
     * @ORM\Column(name="idencuesta", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idencuesta;

    /**
     * @var \AppBundle\Entity\Materia
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Materia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idMateriaElegida", referencedColumnName="idmateria")
     * })
     */
    private $idmateriaelegida;

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Encuesta
     */
    public function setFecha($fecha) {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha() {
        return $this->fecha;
    }
    
    /**
     * Set turno
     *
     * @param integer $turno
     *
     * @return Encuesta
     */
    public function setTurno($turno) {
        $this->turno = $turno;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return integer
     */
    public function getTurno() {
        return $this->fecha;
    }
    
    /**
     * Set Idmateriaelegida
     *
     * @param \AppBundle\Entity\Materia $Idmateriaelegida
     *
     * @return Encuesta
     */
    public function setIdmateriaelegida($Idmateriaelegida) {
        $this->idmateriaelegida = $Idmateriaelegida;

        return $this;
    }

    /**
     * Get Idmateriaelegida
     *
     * @return \AppBundle\Entity\Materia
     */
    public function getIdmateriaelegida() {
        return $this->idmateriaelegida;
    }
}

