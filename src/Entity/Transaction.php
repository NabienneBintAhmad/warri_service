<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\TransactionRepository")
 */
class Transaction
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
    private $transactionType;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateTransaction;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\EntreprisePrestataire", inversedBy="transactions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $matEntreprise;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\ComptePrestataire", inversedBy="transaction")
     * @ORM\JoinColumn(nullable=false)
     */
    private $comptePrestataire;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTransactionType(): ?string
    {
        return $this->transactionType;
    }

    public function setTransactionType(string $transactionType): self
    {
        $this->transactionType = $transactionType;

        return $this;
    }

    public function getDateTransaction(): ?\DateTimeInterface
    {
        return $this->dateTransaction;
    }

    public function setDateTransaction(\DateTimeInterface $dateTransaction): self
    {
        $this->dateTransaction = $dateTransaction;

        return $this;
    }

    public function getMatEntreprise(): ?EntreprisePrestataire
    {
        return $this->matEntreprise;
    }

    public function setMatEntreprise(?EntreprisePrestataire $matEntreprise): self
    {
        $this->matEntreprise = $matEntreprise;

        return $this;
    }

    public function getComptePrestataire(): ?ComptePrestataire
    {
        return $this->comptePrestataire;
    }

    public function setComptePrestataire(?ComptePrestataire $comptePrestataire): self
    {
        $this->comptePrestataire = $comptePrestataire;

        return $this;
    }
}
