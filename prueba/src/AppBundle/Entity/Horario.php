<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Horario
 *
 * @ORM\Table(name="horario", indexes={@ORM\Index(name="fk_Horario_Dia1_idx", columns={"Dia"}), @ORM\Index(name="fk_Horario_Comision1_idx", columns={"Comision"})})
 * @ORM\Entity
 */
class Horario
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Inicio", type="time", nullable=false)
     */
    private $inicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fin", type="time", nullable=false)
     */
    private $fin;

    /**
     * @var integer
     *
     * @ORM\Column(name="idHorario", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idhorario;

    /**
     * @var \AppBundle\Entity\Comision
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Comision")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Comision", referencedColumnName="idComision")
     * })
     */
    private $comision;

    /**
     * @var \AppBundle\Entity\Dia
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Dia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Dia", referencedColumnName="idDia")
     * })
     */
    private $dia;



    /**
     * Set inicio
     *
     * @param \DateTime $inicio
     *
     * @return Horario
     */
    public function setInicio($inicio)
    {
        $this->inicio = $inicio;

        return $this;
    }

    /**
     * Get inicio
     *
     * @return \DateTime
     */
    public function getInicio()
    {
        return $this->inicio;
    }

    /**
     * Set fin
     *
     * @param \DateTime $fin
     *
     * @return Horario
     */
    public function setFin($fin)
    {
        $this->fin = $fin;

        return $this;
    }

    /**
     * Get fin
     *
     * @return \DateTime
     */
    public function getFin()
    {
        return $this->fin;
    }

    /**
     * Get idhorario
     *
     * @return integer
     */
    public function getIdhorario()
    {
        return $this->idhorario;
    }

    /**
     * Set comision
     *
     * @param \AppBundle\Entity\Comision $comision
     *
     * @return Horario
     */
    public function setComision(\AppBundle\Entity\Comision $comision = null)
    {
        $this->comision = $comision;

        return $this;
    }

    /**
     * Get comision
     *
     * @return \AppBundle\Entity\Comision
     */
    public function getComision()
    {
        return $this->comision;
    }

    /**
     * Set dia
     *
     * @param \AppBundle\Entity\Dia $dia
     *
     * @return Horario
     */
    public function setDia(\AppBundle\Entity\Dia $dia = null)
    {
        $this->dia = $dia;

        return $this;
    }

    /**
     * Get dia
     *
     * @return \AppBundle\Entity\Dia
     */
    public function getDia()
    {
        return $this->dia;
    }
    
     public function __toString()
    {   
         return;
    }
}
