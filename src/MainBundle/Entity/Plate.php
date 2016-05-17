<?php

namespace MainBundle\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Plate
 *
 * @ORM\Table(name="Plate")
 * @ORM\Entity(repositoryClass="MainBundle\Repository\PlateRepository")
 * @Vich\Uploadable
 * @ORM\HasLifecycleCallbacks()
 */
class Plate
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
     * @ORM\ManyToOne(targetEntity="Ricetta", inversedBy="plateRicetta")
     */
    private $ricetta;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="plateUser")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="Citta", inversedBy="plateCitta")
     */
    private $citta;

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
     * @return Plate
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
     * @ORM\PrePersist
     */
    public function setDataCreazioneValue()
    {
        $this->dataCreazione = new DateTime();
    }

    public function setRicetta($ricetta)
    {
        $this->ricetta = $ricetta;

        return $this;
    }


    public function getRicetta()
    {
        return $this->ricetta;
    }

    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setCitta($citta)
    {
        $this->citta = $citta;

        return $this;
    }

    public function getCitta()
    {
        return $this->citta;
    }
}

