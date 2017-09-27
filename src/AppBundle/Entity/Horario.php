<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Horario
 *
 * @ORM\Table(name="horario", indexes={@ORM\Index(name="fk_horario_comision_idx", columns={"comision_idcomision"}), @ORM\Index(name="fk_horario_dia1_idx", columns={"dia_iddia"})})
 * @ORM\Entity
 */
class Horario
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="inicio", type="time", nullable=false)
     */
    private $inicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fin", type="time", nullable=false)
     */
    private $fin;

    /**
     * @var integer
     *
     * @ORM\Column(name="idhorario", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idhorario;

    /**
     * @var \AppBundle\Entity\Comision
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Comision")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="comision_idcomision", referencedColumnName="idcomision")
     * })
     */
    private $comisioncomision;

    /**
     * @var \AppBundle\Entity\Dia
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Dia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dia_iddia", referencedColumnName="iddia")
     * })
     */
    private $diadia;



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
     * Set comisioncomision
     *
     * @param \AppBundle\Entity\Comision $comisioncomision
     *
     * @return Horario
     */
    public function setComisioncomision(\AppBundle\Entity\Comision $comisioncomision = null)
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
     * Set diadia
     *
     * @param \AppBundle\Entity\Dia $diadia
     *
     * @return Horario
     */
    public function setDiadia(\AppBundle\Entity\Dia $diadia = null)
    {
        $this->diadia = $diadia;

        return $this;
    }

    /**
     * Get diadia
     *
     * @return \AppBundle\Entity\Dia
     */
    public function getDiadia()
    {
        return $this->diadia;
    }
}
