<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Preferiti
 *
 * @ORM\Table(name="preferiti")
 * @ORM\Entity(repositoryClass="MainBundle\Repository\PlateRepository")
 */
class Preferiti
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
     * @var \DateTime
     *
     * @ORM\Column(name="dataCreazione", type="datetime", nullable=true)
     */
    private $dataCreazione;

    /**
     * @var int
     *
     * @ORM\Column(name="id_User", type="integer", nullable=true)
     */
    private $idUser;

    /**
     * @var int
     *
     * @ORM\Column(name="id_citta", type="integer", nullable=true)
     */
    private $idCitta;


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
     * Set dataCreazione
     *
     * @param \DateTime $dataCreazione
     *
     * @return Preferiti
     */
    public function setDataCreazione($dataCreazione)
    {
        $this->dataCreazione = $dataCreazione;

        return $this;
    }

    /**
     * Get dataCreazione
     *
     * @return \DateTime
     */
    public function getDataCreazione()
    {
        return $this->dataCreazione;
    }

    /**
     * Set idUser
     *
     * @param integer $idUser
     *
     * @return Preferiti
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return int
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set idCitta
     *
     * @param integer $idCitta
     *
     * @return Preferiti
     */
    public function setIdCitta($idCitta)
    {
        $this->idCitta = $idCitta;

        return $this;
    }

    /**
     * Get idCitta
     *
     * @return int
     */
    public function getIdCitta()
    {
        return $this->idCitta;
    }
}

