<?php

namespace MainBundle\Entity;

use MainBundle\Entity\User;
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
 * @ORM\HasLifecycleCallbacks()
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
     * @Vich\UploadableField(mapping="ricetta_image", fileNameProperty="immagineUrl")
     *
     * @var File
     */
    private $imageFile;

     /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="ricettaUser")
     */
    private $user;

    /**
     * @var Citta
     *
     * @ORM\ManyToOne(targetEntity="Citta", inversedBy="ricetteCitta")
     */
    private $citta;

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
        $this->Ricetta = new ArrayCollection();
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
     * Set immagineUrl
     *
     * @param string $immagineUrl
     *
     * @return Ricetta
     */
    public function setImmagineUrl($immagineUrl)
    {
        $this->immagineUrl = $immagineUrl;

        return $this;
    }

    /**
     * Get immagineUrl
     *
     * @return string
     */
    public function getImmagineUrl()
    {
        return $this->immagineUrl;
    }

    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the  update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     *
     * @return Ricetta
     */
    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

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
     * Set User
     *
     * @param User $User
     *
     * @return Ricetta
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get User
     *
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set citta
     *
     * @param Citta $citta
     *
     * @return Ricetta
     */
    public function setCitta($citta)
    {
        $this->citta = $citta;

        return $this;
    }

    /**
     * Get citta
     *
     * @return Citta
     */
    public function getCitta()
    {
        return $this->citta;
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

    /**
     * @ORM\PrePersist
     */
    public function setDataCreazioneValue()
    {
        $this->dataCreazione = new DateTime();
    }
}

