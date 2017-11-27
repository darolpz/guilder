<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Encuesta
 *
 * @ORM\Table(name="encuesta", indexes={@ORM\Index(name="idOpcion_idx", columns={"idOpcion"})})
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
     * @ORM\Column(name="idEncuesta", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idencuesta;

    /**
     * @var \AppBundle\Entity\Materiaelegida
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Materiaelegida")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idOpcion", referencedColumnName="idmateriaElegida")
     * })
     */
    private $idopcion;

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
     * Set idopcion
     *
     * @param \AppBundle\Entity\Materiaelegida $idopcion
     *
     * @return Encuesta
     */
    public function setIdopcion($idopcion) {
        $this->idopcion = $idopcion;

        return $this;
    }

    /**
     * Get idopcion
     *
     * @return \AppBundle\Entity\Materiaelegida
     */
    public function getIdopcion() {
        return $this->idopcion;
    }
    
}

