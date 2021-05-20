<?php

namespace App\Entity;

use App\Repository\UtilisateurRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UtilisateurRepository::class)
 */
class Utilisateur
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
    private $login_u;

    /**
     * @ORM\Column(type="integer")
     */
    private $roles;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_u;

    /**
     * @ORM\Column(type="date")
     */
    private $anniversaire_u;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLoginU(): ?string
    {
        return $this->login_u;
    }

    public function setLoginU(string $login_u): self
    {
        $this->login_u = $login_u;

        return $this;
    }

    public function getRoles(): ?int
    {
        return $this->roles;
    }

    public function setRoles(int $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getNomU(): ?string
    {
        return $this->nom_u;
    }

    public function setNomU(string $nom_u): self
    {
        $this->nom_u = $nom_u;

        return $this;
    }

    public function getAnniversaireU(): ?\DateTimeInterface
    {
        return $this->anniversaire_u;
    }

    public function setAnniversaireU(\DateTimeInterface $anniversaire_u): self
    {
        $this->anniversaire_u = $anniversaire_u;

        return $this;
    }
}
