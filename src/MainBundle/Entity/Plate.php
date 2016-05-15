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
     * @var \DateTime
     *
     * @ORM\Column(name="dataCreazione", type="datetime", nullable=true)
     */
    private $dataCreazione;


    /**
     * @ORM\ManyToOne(targetEntity="Ricetta", inversedBy="plateRicetta")
     * @ORM\JoinColumn(name="ricetta_id", referencedColumnName="id")
     */
    private $ricetta;

     /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="plateUser")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

     /**
     * @ORM\ManyToOne(targetEntity="Citta", inversedBy="plateCitta")
     * @ORM\JoinColumn(name="citta_id", referencedColumnName="id")
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
     * Set nome
     *
     * @param string $nome
     *
     * @return Plate
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
     * @return Plate
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
     * @return Plate
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
     * @return Plate
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

