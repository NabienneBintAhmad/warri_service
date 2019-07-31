<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\EntreprisePrestataireRepository")
 * @UniqueEntity(fields={"Email","matricule"}, message="Cet utilisateur existe déjà")
 */
class EntreprisePrestataire
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Denomination;

    /**
     * @ORM\Column(type="string", length=255)
     */
    //private $Matricule;

    private $matricule;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Email;

    /**
     * @ORM\Column(type="integer")
     */
    private $Contacte;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Adress;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDenomination(): ?string
    {
        return $this->Denomination;
    }

    public function setDenomination(string $Denomination): self
    {
        $this->Denomination = $Denomination;

        return $this;
    }

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(string $Matricule): self
    {
        $this->Matricule = $Matricule;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getContacte(): ?int
    {
        return $this->Contacte;
    }

    public function setContacte(int $Contacte): self
    {
        $this->Contacte = $Contacte;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->Adress;
    }

    public function setAdress(string $Adress): self
    {
        $this->Adress = $Adress;

        return $this;
    }
}
