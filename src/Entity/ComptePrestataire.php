<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
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
    private $matricule;

    /**
     * @ORM\Column(type="integer")
     */
    private $solde;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatricule(): ?EntreprisePrestataire
    {
        return $this->matricule;
    }

    public function setMatricule(EntreprisePrestataire $matricule): self
    {
        $this->matricule = $matricule;

        return $this;
    }

    public function getSolde(): ?int
    {
        return $this->solde;
    }

    public function setSolde(int $solde): self
    {
        $this->solde = $solde;

        return $this;
    }
}