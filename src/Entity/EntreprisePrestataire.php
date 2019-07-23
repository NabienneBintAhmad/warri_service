<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EntreprisePrestataireRepository")
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
    private $matricule;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomComplet;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="integer")
     */
    private $contact;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adress;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\UserPrestataire", mappedBy="matPrestataire")
     */
    private $matPrestataire;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\ComptePrestataire", mappedBy="matEntreprise", cascade={"persist", "remove"})
     */
    private $solde;

    public function __construct()
    {
        $this->matPrestataire = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(string $matricule): self
    {
        $this->matricule = $matricule;

        return $this;
    }

    public function getNomComplet(): ?string
    {
        return $this->nomComplet;
    }

    public function setNomComplet(string $nomComplet): self
    {
        $this->nomComplet = $nomComplet;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getContact(): ?int
    {
        return $this->contact;
    }

    public function setContact(int $contact): self
    {
        $this->contact = $contact;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * @return Collection|UserPrestataire[]
     */
    public function getMatPrestataire(): Collection
    {
        return $this->matPrestataire;
    }

    public function addMatPrestataire(UserPrestataire $matPrestataire): self
    {
        if (!$this->matPrestataire->contains($matPrestataire)) {
            $this->matPrestataire[] = $matPrestataire;
            $matPrestataire->setMatPrestataire($this);
        }

        return $this;
    }

    public function removeMatPrestataire(UserPrestataire $matPrestataire): self
    {
        if ($this->matPrestataire->contains($matPrestataire)) {
            $this->matPrestataire->removeElement($matPrestataire);
            // set the owning side to null (unless already changed)
            if ($matPrestataire->getMatPrestataire() === $this) {
                $matPrestataire->setMatPrestataire(null);
            }
        }

        return $this;
    }

    public function getSolde(): ?ComptePrestataire
    {
        return $this->solde;
    }

    public function setSolde(ComptePrestataire $solde): self
    {
        $this->solde = $solde;

        // set the owning side of the relation if necessary
        if ($this !== $solde->getMatEntreprise()) {
            $solde->setMatEntreprise($this);
        }

        return $this;
    }
}
