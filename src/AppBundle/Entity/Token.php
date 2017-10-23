<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Token
 *
 * @ORM\Table(name="token")
 * @ORM\Entity
 */
class Token
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creado", type="datetime", nullable=false)
     */
    private $creado = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=5, nullable=false)
     */
    private $token;

    /**
     * @var integer
     *
     * @ORM\Column(name="idtoken", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtoken;



    /**
     * Set creado
     *
     * @param \DateTime $creado
     *
     * @return Token
     */
    public function setCreado($creado)
    {
        $this->creado = $creado;

        return $this;
    }

    /**
     * Get creado
     *
     * @return \DateTime
     */
    public function getCreado()
    {
        return $this->creado;
    }

    /**
     * Set token
     *
     * @param string $token
     *
     * @return Token
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Get idtoken
     *
     * @return integer
     */
    public function getIdtoken()
    {
        return $this->idtoken;
    }
}
