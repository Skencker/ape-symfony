<?php

namespace App\Entity;

use App\Repository\ParentsDeleguesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ParentsDeleguesRepository::class)
 */
class ParentsDelegues
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
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $firstname;

    /**
     * @ORM\ManyToOne(targetEntity=FonctionParentsDelegues::class, inversedBy="parentsDelegues")
     * @ORM\JoinColumn(nullable=false)
     */
    private $fonction;

    /**
     * @ORM\ManyToOne(targetEntity=Classes::class, inversedBy="parentsDelegues")
     */
    private $classe;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getFonction(): ?FonctionParentsDelegues
    {
        return $this->fonction;
    }

    public function setFonction(?FonctionParentsDelegues $fonction): self
    {
        $this->fonction = $fonction;

        return $this;
    }

    public function getClasse(): ?Classes
    {
        return $this->classe;
    }

    public function setClasse(?Classes $classe): self
    {
        $this->classe = $classe;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }
}
