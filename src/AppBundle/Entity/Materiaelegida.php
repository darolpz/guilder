<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Materiaelegida
 *
 * @ORM\Table(name="materiaelegida")
 * @ORM\Entity
 */
class Materiaelegida
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombreMateria", type="string", length=50, nullable=false)
     */
    private $nombremateria;

    /**
     * @var integer
     *
     * @ORM\Column(name="codigoMateria", type="integer", nullable=false)
     */
    private $codigomateria;

    /**
     * @var integer
     *
     * @ORM\Column(name="turno", type="integer", nullable=false)
     */
    private $turno;

    /**
     * @var integer
     *
     * @ORM\Column(name="idmateriaElegida", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmateriaelegida;
    
    
    /**
     * Set nombremateria
     *
     * @param string $nombremateria
     *
     * @return Materiaelegida
     */
    public function setNombremateria($nombremateria) {
        $this->nombremateria = $nombremateria;

        return $this;
    }

    /**
     * Get nombremateria
     *
     * @return string
     */
    public function getNombremateria() {
        return $this->nombremateria;
    }
    
    /**
     * Set codigomateria
     *
     * @param integer $codigomateria
     *
     * @return Materiaelegida
     */
    public function setCodigomateria($codigomateria) {
        $this->codigomateria = $codigomateria;

        return $this;
    }

    /**
     * Get codigomateria
     *
     * @return integer
     */
    public function getCodigomateria() {
        return $this->codigomateria;
    }
    
    /**
     * Set turno
     *
     * @param integer $turno
     *
     * @return Materiaelegida
     */
    public function setTurno($turno) {
        $this->turno = $turno;

        return $this;
    }

    /**
     * Get turno
     *
     * @return integer
     */
    public function getTurno() {
        return $this->turno;
    }
    
    /**
     * Set idmateriaelegida
     *
     * @param integer $idmateriaelegida
     *
     * @return integer
     */
    public function setIdmateriaelegida($idmateriaelegida) {
        $this->idmateriaelegida = $idmateriaelegida;

        return $this;
    }

    /**
     * Get idmateriaelegida
     *
     * @return integer
     */
    public function getIdmateriaelegida() {
        return $this->idmateriaelegida;
    }
    
    
    
    

}

