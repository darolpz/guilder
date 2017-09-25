<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Materia
 *
 * @ORM\Table(name="materia")
 * @ORM\Entity
 */
class Materia
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=80, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=10, nullable=false)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="coordinador", type="string", length=45, nullable=true)
     */
    private $coordinador;

    /**
     * @var integer
     *
     * @ORM\Column(name="idmateria", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmateria;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Carrera", mappedBy="materiamateria")
     */
    private $carreracarrera;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->carreracarrera = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Materia
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set codigo
     *
     * @param string $codigo
     *
     * @return Materia
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set coordinador
     *
     * @param string $coordinador
     *
     * @return Materia
     */
    public function setCoordinador($coordinador)
    {
        $this->coordinador = $coordinador;

        return $this;
    }

    /**
     * Get coordinador
     *
     * @return string
     */
    public function getCoordinador()
    {
        return $this->coordinador;
    }

    /**
     * Get idmateria
     *
     * @return integer
     */
    public function getIdmateria()
    {
        return $this->idmateria;
    }

    /**
     * Add carreracarrera
     *
     * @param \AppBundle\Entity\Carrera $carreracarrera
     *
     * @return Materia
     */
    public function addCarreracarrera(\AppBundle\Entity\Carrera $carreracarrera)
    {
        $this->carreracarrera[] = $carreracarrera;

        return $this;
    }

    /**
     * Remove carreracarrera
     *
     * @param \AppBundle\Entity\Carrera $carreracarrera
     */
    public function removeCarreracarrera(\AppBundle\Entity\Carrera $carreracarrera)
    {
        $this->carreracarrera->removeElement($carreracarrera);
    }

    /**
     * Get carreracarrera
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCarreracarrera()
    {
        return $this->carreracarrera;
    }
}
