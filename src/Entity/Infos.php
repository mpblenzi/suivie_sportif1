<?php

namespace App\Entity;

use App\Repository\InfosRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InfosRepository::class)
 */
class Infos
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $utilisateur_id;

    /**
     * @ORM\Column(type="date")
     */
    private $date_i;

    /**
     * @ORM\Column(type="integer")
     */
    private $taille_i;

    /**
     * @ORM\Column(type="float")
     */
    private $poids_i;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbre_pas_i;

    /**
     * @ORM\Column(type="integer")
     */
    private $calories_i;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUtilisateurId(): ?int
    {
        return $this->utilisateur_id;
    }

    public function setUtilisateurId(int $utilisateur_id): self
    {
        $this->utilisateur_id = $utilisateur_id;

        return $this;
    }

    public function getDateI(): ?\DateTimeInterface
    {
        return $this->date_i;
    }

    public function setDateI(\DateTimeInterface $date_i): self
    {
        $this->date_i = $date_i;

        return $this;
    }

    public function getTailleI(): ?int
    {
        return $this->taille_i;
    }

    public function setTailleI(int $taille_i): self
    {
        $this->taille_i = $taille_i;

        return $this;
    }

    public function getPoidsI(): ?float
    {
        return $this->poids_i;
    }

    public function setPoidsI(float $poids_i): self
    {
        $this->poids_i = $poids_i;

        return $this;
    }

    public function getNbrePasI(): ?int
    {
        return $this->nbre_pas_i;
    }

    public function setNbrePasI(int $nbre_pas_i): self
    {
        $this->nbre_pas_i = $nbre_pas_i;

        return $this;
    }

    public function getCaloriesI(): ?int
    {
        return $this->calories_i;
    }

    public function setCaloriesI(int $calories_i): self
    {
        $this->calories_i = $calories_i;

        return $this;
    }
}
