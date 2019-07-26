<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
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
    private $nomComplet;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $matricule;

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
     * @ORM\OneToMany(targetEntity="App\Entity\UserPrestataire", mappedBy="mat_entreprise")
     */
    private $userPrestataires;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Transaction", mappedBy="matEntreprise")
     */
    private $transactions;

    public function __construct()
    {
        $this->userPrestataires = new ArrayCollection();
        $this->transactions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(string $matricule): self
    {
        $this->matricule = $matricule;

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
    public function getUserPrestataires(): Collection
    {
        return $this->userPrestataires;
    }

    public function addUserPrestataire(UserPrestataire $userPrestataire): self
    {
        if (!$this->userPrestataires->contains($userPrestataire)) {
            $this->userPrestataires[] = $userPrestataire;
            $userPrestataire->setMatEntreprise($this);
        }

        return $this;
    }

    public function removeUserPrestataire(UserPrestataire $userPrestataire): self
    {
        if ($this->userPrestataires->contains($userPrestataire)) {
            $this->userPrestataires->removeElement($userPrestataire);
            // set the owning side to null (unless already changed)
            if ($userPrestataire->getMatEntreprise() === $this) {
                $userPrestataire->setMatEntreprise(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Transaction[]
     */
    public function getTransactions(): Collection
    {
        return $this->transactions;
    }

    public function addTransaction(Transaction $transaction): self
    {
        if (!$this->transactions->contains($transaction)) {
            $this->transactions[] = $transaction;
            $transaction->setMatEntreprise($this);
        }

        return $this;
    }

    public function removeTransaction(Transaction $transaction): self
    {
        if ($this->transactions->contains($transaction)) {
            $this->transactions->removeElement($transaction);
            // set the owning side to null (unless already changed)
            if ($transaction->getMatEntreprise() === $this) {
                $transaction->setMatEntreprise(null);
            }
        }

        return $this;
    }
}
