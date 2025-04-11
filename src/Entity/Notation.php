<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Notation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: 'float')]
    private float $note;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $commentaire = null;

    #[ORM\Column(type: 'datetime')]
    private \DateTimeInterface $dateCreation;

    #[ORM\ManyToOne(targetEntity: user::class, inversedBy: 'notations',)]
    #[ORM\JoinColumn(name: "user_id", referencedColumnName: "id", onDelete: "CASCADE")]
    private ?user $user = null;

    #[ORM\ManyToOne(targetEntity: Enseigne::class, inversedBy: 'notations')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Enseigne $enseigne = null;

    public function __construct()
    {
        $this->dateCreation = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNote(): float
    {
        return $this->note;
    }

    public function setNote(float $note): self
    {
        $this->note = $note;
        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(?string $commentaire): self
    {
        $this->commentaire = $commentaire;
        return $this;
    }

    public function getDateCreation(): \DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(\DateTimeInterface $dateCreation): self
    {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    public function getuser(): ?user
    {
        return $this->user;
    }

    public function setuser(?user $user): self
    {
        $this->user = $user;
        return $this;
    }

    public function getEnseigne(): ?Enseigne
    {
        return $this->enseigne;
    }

    public function setEnseigne(?Enseigne $enseigne): self
    {
        $this->enseigne = $enseigne;
        return $this;
    }
}