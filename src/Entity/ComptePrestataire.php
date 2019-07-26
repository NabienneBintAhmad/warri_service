<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\ComptePrestataireRepository")
 */
class ComptePrestataire
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\EntreprisePrestataire", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $matEntreprise;

    /**
     * @ORM\Column(type="integer")
     */
    private $somme;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Transaction", mappedBy="comptePrestataire")
     */
    private $transaction;

    public function __construct()
    {
        $this->transaction = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatEntreprise(): ?EntreprisePrestataire
    {
        return $this->matEntreprise;
    }

    public function setMatEntreprise(EntreprisePrestataire $matEntreprise): self
    {
        $this->matEntreprise = $matEntreprise;

        return $this;
    }

    public function getSomme(): ?int
    {
        return $this->somme;
    }

    public function setSomme(int $somme): self
    {
        $this->somme = $somme;

        return $this;
    }

    /**
     * @return Collection|Transaction[]
     */
    public function getTransaction(): Collection
    {
        return $this->transaction;
    }

    public function addTransaction(Transaction $transaction): self
    {
        if (!$this->transaction->contains($transaction)) {
            $this->transaction[] = $transaction;
            $transaction->setComptePrestataire($this);
        }

        return $this;
    }

    public function removeTransaction(Transaction $transaction): self
    {
        if ($this->transaction->contains($transaction)) {
            $this->transaction->removeElement($transaction);
            // set the owning side to null (unless already changed)
            if ($transaction->getComptePrestataire() === $this) {
                $transaction->setComptePrestataire(null);
            }
        }

        return $this;
    }
}
