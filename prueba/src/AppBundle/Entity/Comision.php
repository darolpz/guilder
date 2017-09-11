<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comision
 *
 * @ORM\Table(name="comision", indexes={@ORM\Index(name="fk_Comision_Materia_idx", columns={"Materia"})})
 * @ORM\Entity
 */
class Comision
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Numero", type="integer", nullable=false)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="Profesor", type="string", length=45, nullable=true)
     */
    private $profesor;

    /**
     * @var integer
     *
     * @ORM\Column(name="Cuatrimestre", type="integer", nullable=false)
     */
    private $cuatrimestre;

    /**
     * @var integer
     *
     * @ORM\Column(name="Year", type="integer", nullable=false)
     */
    private $year;

    /**
     * @var integer
     *
     * @ORM\Column(name="idComision", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcomision;

    /**
     * @var \AppBundle\Entity\Materia
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Materia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Materia", referencedColumnName="idMateria")
     * })
     */
    private $materia;



    /**
     * Set numero
     *
     * @param integer $numero
     *
     * @return Comision
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return integer
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set profesor
     *
     * @param string $profesor
     *
     * @return Comision
     */
    public function setProfesor($profesor)
    {
        $this->profesor = $profesor;

        return $this;
    }

    /**
     * Get profesor
     *
     * @return string
     */
    public function getProfesor()
    {
        return $this->profesor;
    }

    /**
     * Set cuatrimestre
     *
     * @param integer $cuatrimestre
     *
     * @return Comision
     */
    public function setCuatrimestre($cuatrimestre)
    {
        $this->cuatrimestre = $cuatrimestre;

        return $this;
    }

    /**
     * Get cuatrimestre
     *
     * @return integer
     */
    public function getCuatrimestre()
    {
        return $this->cuatrimestre;
    }

    /**
     * Set year
     *
     * @param \DateTime $year
     *
     * @return Comision
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return \DateTime
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Get idcomision
     *
     * @return integer
     */
    public function getIdcomision()
    {
        return $this->idcomision;
    }

    /**
     * Set materia
     *
     * @param \AppBundle\Entity\Materia $materia
     *
     * @return Comision
     */
    public function setMateria(\AppBundle\Entity\Materia $materia = null)
    {
        $this->materia = $materia;

        return $this;
    }

    /**
     * Get materia
     *
     * @return \AppBundle\Entity\Materia
     */
    public function getMateria()
    {
        return $this->materia;
    }
    
     public function __toString()
    {
        return $this->getMateria()->__toString(). " " . $this->getNumero();
    }
   
}
