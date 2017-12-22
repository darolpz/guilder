<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Apiencuesta
 *
 * @ORM\Table(name="apiencuesta")
 * @ORM\Entity
 */
class Apiencuesta
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime", nullable=false)
     */
    private $createdat;

    /**
     * @var integer
     *
     * @ORM\Column(name="idEncuesta", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idencuesta;



    /**
     * Set createdat
     *
     * @param \DateTime $createdat
     *
     * @return Apiencuesta
     */
    public function setCreatedat($createdat)
    {
        $this->createdat = $createdat;

        return $this;
    }

    /**
     * Get createdat
     *
     * @return \DateTime
     */
    public function getCreatedat()
    {
        return $this->createdat;
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
