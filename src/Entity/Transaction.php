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
     * @ORM\Column(type="integer")
     */
    private $depot;

    /**
     * @ORM\Column(type="integer")
     */
    private $retrait;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateDepot;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateRetrait;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\ComptePrestataire", inversedBy="historique")
     * @ORM\JoinColumn(nullable=false)
     */
    private $transaction;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDepot(): ?int
    {
        return $this->depot;
    }

    public function setDepot(int $depot): self
    {
        $this->depot = $depot;

        return $this;
    }

    public function getRetrait(): ?int
    {
        return $this->retrait;
    }

    public function setRetrait(int $retrait): self
    {
        $this->retrait = $retrait;

        return $this;
    }

    public function getDateDepot(): ?\DateTimeInterface
    {
        return $this->dateDepot;
    }

    public function setDateDepot(\DateTimeInterface $dateDepot): self
    {
        $this->dateDepot = $dateDepot;

        return $this;
    }

    public function getDateRetrait(): ?\DateTimeInterface
    {
        return $this->dateRetrait;
    }

    public function setDateRetrait(\DateTimeInterface $dateRetrait): self
    {
        $this->dateRetrait = $dateRetrait;

        return $this;
    }

    public function getTransaction(): ?ComptePrestataire
    {
        return $this->transaction;
    }

    public function setTransaction(?ComptePrestataire $transaction): self
    {
        $this->transaction = $transaction;

        return $this;
    }
}
