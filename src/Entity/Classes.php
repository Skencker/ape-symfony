<?php

namespace App\Entity;

use App\Repository\ClassesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClassesRepository::class)
 */
class Classes
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
     * @ORM\OneToMany(targetEntity=ParentsDelegues::class, mappedBy="classe")
     */
    private $parentsDelegues;

    public function __construct()
    {
        $this->parentsDelegues = new ArrayCollection();
    }

    public function __toString() {
        return $this->getName();
    }

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

    /**
     * @return Collection|ParentsDelegues[]
     */
    public function getParentsDelegues(): Collection
    {
        return $this->parentsDelegues;
    }

    public function addParentsDelegue(ParentsDelegues $parentsDelegue): self
    {
        if (!$this->parentsDelegues->contains($parentsDelegue)) {
            $this->parentsDelegues[] = $parentsDelegue;
            $parentsDelegue->setClasse($this);
        }

        return $this;
    }

    public function removeParentsDelegue(ParentsDelegues $parentsDelegue): self
    {
        if ($this->parentsDelegues->removeElement($parentsDelegue)) {
            // set the owning side to null (unless already changed)
            if ($parentsDelegue->getClasse() === $this) {
                $parentsDelegue->setClasse(null);
            }
        }

        return $this;
    }
}
