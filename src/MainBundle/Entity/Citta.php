<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Citta
 *
 * @ORM\Table(name="citta")
 * @ORM\Entity(repositoryClass="MainBundle\Repository\CittaRepository")
 */
class Citta
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=255, nullable=true)
     */
    private $nome;

    /**
     * @var int
     *
     * @ORM\Column(name="provincia_id", type="integer", nullable=true)
     */
    private $provinciaId;


    /**
     * @ORM\OneToMany(targetEntity="Plate", mappedBy="citta")
     */
    private $plateCitta;


    /**
     * Citta constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->plateCitta = new ArrayCollection();
    }


       public function setPlateCitta($plateCitta)
    {
        $this->plateCitta = $plateCitta;

        return $this;
    }


    public function getPlateCitta()
    {
        return $this->plateCitta;
    }






    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Citta
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set provinciaId
     *
     * @param integer $provinciaId
     *
     * @return Citta
     */
    public function setProvinciaId($provinciaId)
    {
        $this->provinciaId = $provinciaId;

        return $this;
    }

    /**
     * Get provinciaId
     *
     * @return int
     */
    public function getProvinciaId()
    {
        return $this->provinciaId;
    }
}

