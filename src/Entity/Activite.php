<?php

namespace App\Entity;

use App\Repository\ActiviteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ActiviteRepository::class)
 */
class Activite
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
     * @ORM\Column(type="integer")
     */
    private $type_activite_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $duree_a;

    /**
     * @ORM\Column(type="date")
     */
    private $date_a;

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

    public function getTypeActiviteId(): ?int
    {
        return $this->type_activite_id;
    }

    public function setTypeActiviteId(int $type_activite_id): self
    {
        $this->type_activite_id = $type_activite_id;

        return $this;
    }

    public function getDureeA(): ?int
    {
        return $this->duree_a;
    }

    public function setDureeA(int $duree_a): self
    {
        $this->duree_a = $duree_a;

        return $this;
    }

    public function getDateA(): ?\DateTimeInterface
    {
        return $this->date_a;
    }

    public function setDateA(\DateTimeInterface $date_a): self
    {
        $this->date_a = $date_a;

        return $this;
    }
}
