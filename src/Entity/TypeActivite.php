<?php

namespace App\Entity;

use App\Repository\TypeActiviteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TypeActiviteRepository::class)
 */
class TypeActivite
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_ta;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbre_cal_heure_ta;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomTa(): ?string
    {
        return $this->nom_ta;
    }

    public function setNomTa(string $nom_ta): self
    {
        $this->nom_ta = $nom_ta;

        return $this;
    }

    public function getNbreCalHeureTa(): ?int
    {
        return $this->nbre_cal_heure_ta;
    }

    public function setNbreCalHeureTa(int $nbre_cal_heure_ta): self
    {
        $this->nbre_cal_heure_ta = $nbre_cal_heure_ta;

        return $this;
    }
}
