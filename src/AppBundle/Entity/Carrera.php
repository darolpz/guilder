<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Carrera
 *
 * @ORM\Table(name="carrera")
 * @ORM\Entity
 */
class Carrera
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=80, nullable=false)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcarrera", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcarrera;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Materia", inversedBy="carreracarrera")
     * @ORM\JoinTable(name="carrera_has_materia",
     *   joinColumns={
     *     @ORM\JoinColumn(name="carrera_idcarrera", referencedColumnName="idcarrera")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="materia_idmateria", referencedColumnName="idmateria")
     *   }
     * )
     */
    private $materiamateria;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->materiamateria = new \Doctrine\Common\Collections\ArrayCollection();
    }
    public function __toString()
    {
        return $this->getNombre();
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Carrera
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
     * Get idcarrera
     *
     * @return integer
     */
    public function getIdcarrera()
    {
        return $this->idcarrera;
    }

    /**
     * Add materiamaterium
     *
     * @param \AppBundle\Entity\Materia $materiamaterium
     *
     * @return Carrera
     */
    public function addMateriamaterium(\AppBundle\Entity\Materia $materiamaterium)
    {
        $this->materiamateria[] = $materiamaterium;

        return $this;
    }

    /**
     * Remove materiamaterium
     *
     * @param \AppBundle\Entity\Materia $materiamaterium
     */
    public function removeMateriamaterium(\AppBundle\Entity\Materia $materiamaterium)
    {
        $this->materiamateria->removeElement($materiamaterium);
    }

    /**
     * Get materiamateria
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMateriamateria()
    {
        return $this->materiamateria;
    }
}
