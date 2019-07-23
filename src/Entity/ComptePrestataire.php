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
     * @ORM\OneToOne(targetEntity="App\Entity\EntreprisePrestataire", inversedBy="matricule", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $matEntreprise;

    /**
     * @ORM\Column(type="integer")
     */
    private $solde;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Transaction", mappedBy="transaction")
     */
    private $historique;

    public function __construct()
    {
        $this->historique = new ArrayCollection();
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

    public function getSolde(): ?int
    {
        return $this->solde;
    }

    public function setSolde(int $solde): self
    {
        $this->solde = $solde;

        return $this;
    }

    /**
     * @return Collection|Transaction[]
     */
    public function getHistorique(): Collection
    {
        return $this->historique;
    }

    public function addHistorique(Transaction $historique): self
    {
        if (!$this->historique->contains($historique)) {
            $this->historique[] = $historique;
            $historique->setTransaction($this);
        }

        return $this;
    }

    public function removeHistorique(Transaction $historique): self
    {
        if ($this->historique->contains($historique)) {
            $this->historique->removeElement($historique);
            // set the owning side to null (unless already changed)
            if ($historique->getTransaction() === $this) {
                $historique->setTransaction(null);
            }
        }

        return $this;
    }
}
