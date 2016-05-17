<?php
// src/MainBundle/Entity/User.php

namespace MainBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Vich\UploaderBundle\Mapping\Annotation as Vich;


/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 * @ORM\Entity(repositoryClass="MainBundle\Repository\UserRepository")
 * @Vich\Uploadable
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

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
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=255)
     */
    private $nome;

    /**
     * @ORM\OneToMany(targetEntity="Plate", mappedBy="user")
     */
    private $plateUser;

     /**
      * @ORM\OneToMany(targetEntity="Ricetta", mappedBy="user")
      */
    private $ricetteUser;

    /**
     * User constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->plateUser = new ArrayCollection();
        $this->ricetteUser = new ArrayCollection();
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return User
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

    public function setPlateUser($plateUser)
    {
        $this->plateUser = $plateUser;

        return $this;
    }

    public function getPlateUser()
    {
        return $this->plateUser;
    }

    public function setRicetteUser($ricetteUser)
    {
        $this->ricetteUser = $ricetteUser;

        return $this;
    }

    public function getRicetteUser()
    {
        return $this->ricetteUser;
    }
}
