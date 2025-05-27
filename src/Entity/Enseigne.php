<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Event\PreRemoveEventArgs;

#[ORM\Entity]
#[ORM\HasLifecycleCallbacks]
class Enseigne
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 255)]
    private string $nom;

    #[ORM\Column(type: 'string', length: 255)]
    private string $numeroTelephone;

    #[ORM\Column(type: 'string', length: 255)]
    private string $adresse;

    #[ORM\Column(type: 'float', nullable: true)]
    private ?float $latitude = null;

    #[ORM\Column(type: 'float', nullable: true)]
    private ?float $longitude = null;


    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $photo = null;

    #[ORM\Column(type: 'text')]
    private string $description;

    #[ORM\Column(type: 'json', nullable: true)]
    private ?array $pointsCle = null;

    // #[ORM\Column(type: 'string', length: 255)]
    // private string $gpsLocation;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $website = null;

    #[ORM\Column(type: 'float', nullable: true)]
    private ?float $notePrix = null;

    #[ORM\Column(type: 'float', nullable: true)]
    private ?float $noteQualite = null;

    #[ORM\Column(type: 'float', nullable: true)]
    private ?float $noteAmbiance = null;


    #[ORM\Column(type: 'string', length: 70, nullable: true)]
    private ?string $slogan = null;


    #[ORM\OneToMany(targetEntity: Horaire::class, mappedBy: 'enseigne', cascade: ['persist', 'remove'], orphanRemoval: true)]
    private Collection $horaires;

    #[ORM\OneToMany(targetEntity: Notation::class, mappedBy: 'enseigne', cascade: ['persist', 'remove'], orphanRemoval: true)]
    private Collection $notations;

    #[ORM\ManyToMany(targetEntity: Categorie::class, inversedBy: 'enseignes')]
    #[ORM\JoinTable(name: 'enseigne_categorie')]
    private Collection $categories;

    #[ORM\ManyToMany(targetEntity: User::class, inversedBy: 'enseignesFavorites')]
    #[ORM\JoinTable(name: 'enseigne_user_favoris')]
    private Collection $favoris;

    public function __construct()
    {
        $this->horaires = new ArrayCollection();
        $this->notations = new ArrayCollection();
        $this->categories = new ArrayCollection();
        $this->favoris = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        return $this;
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
    
    public function getSlogan(): ?string
    {
        return $this->slogan;
    }
    
    public function setSlogan(?string $slogan): self
    {
        $this->slogan = $slogan;
        return $this;
    }


    public function getNumeroTelephone(): string
    {
        return $this->numeroTelephone;
    }

    public function setNumeroTelephone(string $numeroTelephone): self
    {
        $this->numeroTelephone = $numeroTelephone;
        return $this;
    }

    public function getAdresse(): string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;
        return $this;
    }

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLatitude(?float $latitude): self
    {
        $this->latitude = $latitude;
        return $this;
    }

    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    public function setLongitude(?float $longitude): self
    {
        $this->longitude = $longitude;
        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): self
    {
        $this->photo = $photo;
        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }



    public function getPointsCle(): ?array
    {
        return $this->pointsCle;
    }

    public function setPointsCle(?array $pointsCle): self
    {
        $this->pointsCle = $pointsCle;
        return $this;
    }

    // public function getGpsLocation(): string
    // {
    //     return $this->gpsLocation;
    // }

    // public function setGpsLocation(string $gpsLocation): self
    // {
    //     $this->gpsLocation = $gpsLocation;
    //     return $this;
    // }

    public function getWebsite(): ?string
    {
        return $this->website;
    }

    public function setWebsite(?string $website): self
    {
        $this->website = $website;
        return $this;
    }

    /**
     * @return Collection<int, Horaire>
     */
    public function getHoraires(): Collection
    {
        if (!$this->horaires instanceof Collection) {
            $this->horaires = new ArrayCollection();
        }
        return $this->horaires;
    }

    public function addHoraire(Horaire $horaire): self
    {
        if (!$this->getHoraires()->contains($horaire)) {
            $this->getHoraires()->add($horaire);
            $horaire->setEnseigne($this);
        }
        return $this;
    }

    public function removeHoraire(Horaire $horaire): self
    {
        if ($this->getHoraires()->removeElement($horaire)) {
            if ($horaire->getEnseigne() === $this) {
                $horaire->setEnseigne(null);
            }
        }
        return $this;
    }

    /**
     * @return Collection<int, Categorie>
     */
    public function getCategories(): Collection
    {
        if ($this->categories === null) {
            $this->categories = new ArrayCollection();
        }
        return $this->categories;
    }

    public function addCategory(Categorie $category): self
    {
        if (!$this->getCategories()->contains($category)) {
            $this->getCategories()->add($category);
            // On évite la récursion
            if (!$category->getEnseignes()->contains($this)) {
                $category->getEnseignes()->add($this);
            }
        }
        return $this;
    }

    public function removeCategory(Categorie $category): self
    {
        if ($this->categories->contains($category)) {
            $this->categories->removeElement($category);
            $category->getEnseignes()->removeElement($this);
        }
        return $this;
    }

    #[ORM\PreRemove]
    public function onPreRemove(PreRemoveEventArgs $args): void
    {
        // Nettoyage des relations avant suppression
        $categories = $this->getCategories()->toArray();
        foreach ($categories as $category) {
            if ($category->getEnseignes()->contains($this)) {
                $category->getEnseignes()->removeElement($this);
            }
        }
        
        // Pas besoin de gérer horaires et notations car ils sont configurés avec orphanRemoval=true
    }

    /**
     * @return Collection<int, User>
     */
    public function getFavoris(): Collection
    {
        if (!$this->favoris instanceof Collection) {
            $this->favoris = new ArrayCollection();
        }
        return $this->favoris;
    }

    public function addFavori(User $favori): self
    {
        if (!$this->getFavoris()->contains($favori)) {
            $this->getFavoris()->add($favori);
        }
        return $this;
    }

    public function removeFavori(User $favori): self
    {
        $this->getFavoris()->removeElement($favori);
        return $this;
    }

    public function __toString(): string
    {
        return $this->nom;
    }
    public function setPrix(float $prix): self
    {
        return $this->setNotePrix($prix);
    }

}