<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dia
 *
 * @ORM\Table(name="dia")
 * @ORM\Entity
 */
class Dia {

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=45, nullable=false)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="iddia", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddia;

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Dia
     */
    public function setNombre($nombre) {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre() {
        return $this->nombre;
    }

    /**
     * Get iddia
     *
     * @return integer
     */
    public function getIddia() {
        return $this->iddia;
    }

    public function __toString() {

        return $this->getNombre();
    }

}
