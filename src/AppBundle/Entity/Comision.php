<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comision
 *
 * @ORM\Table(name="comision", indexes={@ORM\Index(name="fk_comision_materia1_idx", columns={"materia_idmateria"})})
 * @ORM\Entity
 */
class Comision
{
    /**
     * @var integer
     *
     * @ORM\Column(name="numero", type="integer", nullable=false)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="profesor", type="string", length=45, nullable=true)
     */
    private $profesor;

    /**
     * @var integer
     *
     * @ORM\Column(name="cuatrimestre", type="integer", nullable=false)
     */
    private $cuatrimestre;

    /**
     * @var integer
     *
     * @ORM\Column(name="year", type="integer", nullable=false)
     */
    private $year;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcomision", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcomision;

    /**
     * @var \AppBundle\Entity\Materia
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Materia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="materia_idmateria", referencedColumnName="idmateria")
     * })
     */
    private $materiamateria;



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
     * @param integer $year
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
     * @return integer
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
     * Set materiamateria
     *
     * @param \AppBundle\Entity\Materia $materiamateria
     *
     * @return Comision
     */
    public function setMateriamateria(\AppBundle\Entity\Materia $materiamateria = null)
    {
        $this->materiamateria = $materiamateria;

        return $this;
    }

    /**
     * Get materiamateria
     *
     * @return \AppBundle\Entity\Materia
     */
    public function getMateriamateria()
    {
        return $this->materiamateria;
    }
	 public function __toString()
    {
        return $this->getMateriamateria()->__toString(). " " . $this->getNumero();
    }
}
