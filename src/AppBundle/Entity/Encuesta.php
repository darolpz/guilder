<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Encuesta
 *
 * @ORM\Table(name="encuesta")
 * @ORM\Entity
 */
class Encuesta
{
    /**
     * @var string
     *
     * @ORM\Column(name="materias", type="string", length=50, nullable=false)
     */
    private $materias;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var integer
     *
     * @ORM\Column(name="idTurno", type="integer", nullable=false)
     */
    private $idturno;

    /**
     * @var integer
     *
     * @ORM\Column(name="idEncuesta", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idencuesta;



    /**
     * Set materias
     *
     * @param string $materias
     *
     * @return Encuesta
     */
    public function setMaterias($materias)
    {
        $this->materias = $materias;
    
        return $this;
    }

    /**
     * Get materias
     *
     * @return string
     */
    public function getMaterias()
    {
        return $this->materias;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Encuesta
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    
        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set idturno
     *
     * @param integer $idturno
     *
     * @return Encuesta
     */
    public function setIdturno($idturno)
    {
        $this->idturno = $idturno;
    
        return $this;
    }

    /**
     * Get idturno
     *
     * @return integer
     */
    public function getIdturno()
    {
        return $this->idturno;
    }

    /**
     * Get idencuesta
     *
     * @return integer
     */
    public function getIdencuesta()
    {
        return $this->idencuesta;
    }
}
