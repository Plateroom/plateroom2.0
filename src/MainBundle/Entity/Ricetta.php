<?php

namespace MainBundle\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Ricetta
 *
 * @ORM\Table(name="Ricetta")
 * @ORM\Entity(repositoryClass="MainBundle\Repository\RicettaRepository")
 * @Vich\Uploadable
 */

class Ricetta
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
     * @var string
     *
     * @ORM\Column(name="descrizione", type="string", length=255, nullable=true)
     */
    private $descrizione;

    /**
     * @var string
     *
     * @ORM\Column(name="immagine_Url", type="text")
     */
    private $immagineUrl;

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="sala_image", fileNameProperty="immagineUrl")
     *
     * @var File
     */
    private $imageFile;

     /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="ricettaUser")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @var int
     *
     * @ORM\Column(name="id_citta", type="integer", nullable=true)
     */
    private $idCitta;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataCreazione", type="datetime", nullable=true)
     */
    private $dataCreazione;


     /**
     * @ORM\OneToMany(targetEntity="Plate", mappedBy="ricetta")
     */
    private $plateRicetta;


    /**
     * Ricetta constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->plateRicetta = new ArrayCollection();
    }


       public function setPlateRicetta($plateRicetta)
    {
        $this->plateRicetta = $plateRicetta;

        return $this;
    }


    public function getPlateRicetta()
    {
        return $this->plateRicetta;
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
     * @return Ricetta
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
     * Set descrizione
     *
     * @param string $descrizione
     *
     * @return Ricetta
     */
    public function setDescrizione($descrizione)
    {
        $this->descrizione = $descrizione;

        return $this;
    }

    /**
     * Get descrizione
     *
     * @return string
     */
    public function getDescrizione()
    {
        return $this->descrizione;
    }

    /**
     * Set imageUrl
     *
     * @param string $imageUrl
     *
     * @return Ricetta
     */
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }

    /**
     * Get imageUrl
     *
     * @return string
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * Set imageFile
     *
     * @param string $imageFile
     *
     * @return Ricetta
     */
    public function setImageFile($imageFile)
    {
        $this->imageFile = $imageFile;

        return $this;
    }

    /**
     * Get imageFile
     *
     * @return string
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * Set idUser
     *
     * @param integer $idUser
     *
     * @return Ricetta
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
     * @return Ricetta
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

    /**
     * Set dataCreazione
     *
     * @param \DateTime $dataCreazione
     *
     * @return Ricetta
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
}

