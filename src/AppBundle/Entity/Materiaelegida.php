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


}

