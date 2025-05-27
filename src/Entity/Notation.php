<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "notation")]
#[ORM\HasLifecycleCallbacks]
#[ORM\UniqueConstraint(name: 'unique_user_enseigne', columns: ['user_id', 'enseigne_id'])]
class Notation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: 'float', nullable: true)]
    private ?float $notePrix = null;

    #[ORM\Column(type: 'float', nullable: true)]
    private ?float $noteQualite = null;

    #[ORM\Column(type: 'float', nullable: true)]
    private ?float $noteAmbiance = null;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $commentaire = null;

    #[ORM\Column(type: 'datetime')]
    private \DateTimeInterface $dateCreation;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'notations')]
    #[ORM\JoinColumn(name: "user_id", referencedColumnName: "id", onDelete: "CASCADE", nullable: false)]
    private ?User $user = null;

    #[ORM\ManyToOne(targetEntity: Enseigne::class, inversedBy: 'notations')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Enseigne $enseigne = null;

    public function __construct()
    {
        $this->dateCreation = new \Datetime();
    }

    #[ORM\PrePersist]
    public function prePersist(): void
    {
        if (!$this->dateCreation) {
            $this->dateCreation = new \Datetime();
        }
    }
    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNotePrix(): ?float
    {
        return $this->notePrix;
    }

    public function setNotePrix(?float $notePrix): self
    {
        $this->notePrix = $notePrix;
        return $this;
    }

    public function getNoteQualite(): ?float
    {
        return $this->noteQualite;
    }

    public function setNoteQualite(?float $noteQualite): self
    {
        $this->noteQualite = $noteQualite;
        return $this;
    }

    public function getNoteAmbiance(): ?float
    {
        return $this->noteAmbiance;
    }

    public function setNoteAmbiance(?float $noteAmbiance): self
    {
        $this->noteAmbiance = $noteAmbiance;
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
    public function onPrePersist(): void
    {
        $this->dateCreation = new \DateTimeImmutable();
    }

    public function setDateCreation(\DateTimeInterface $date): self
    {
        $this->dateCreation = $date instanceof \DateTimeImmutable
            ? $date
            : \DateTimeImmutable::createFromMutable($date);
        return $this;
    }


    public function getDateCreation(): ?\DateTime
    {
        return $this->dateCreation;
    }

    /**
     * @ORM\PrePersist
     */
    public function initializeDateCreation(): void
    {

      $this->dateCreation = new \DateTime();
    }
    

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
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