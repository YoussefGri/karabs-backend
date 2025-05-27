<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Event\PreRemoveEventArgs;
use Symfony\Component\Serializer\Annotation\Groups;


#[ORM\Entity]
#[ORM\HasLifecycleCallbacks]
class Categorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    #[Groups('categorie:read')]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 255)]
    #[Groups('categorie:read')]
    private string $nom;

    #[ORM\ManyToMany(targetEntity: Enseigne::class, mappedBy: 'categories')]
    private Collection $enseignes;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups('categorie:read')]
    private ?string $image = null;

    #[ORM\Column(length: 50, nullable: true)]
    #[Groups('categorie:read')]
    private ?string $couleur = null;

    
    public function __toString(): string
    {
        return $this->nom; 
    }
    public function __construct()
    {
        $this->enseignes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;
        return $this;
    }
    public function getCouleur(): ?string
    {
        return $this->couleur;
    }
    public function setCouleur(?string $couleur): self
    {
        $this->couleur = $couleur;
        return $this;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    /**
 * @return Collection<int, Enseigne>
 */
public function getEnseignes(): Collection
{
    if ($this->enseignes === null) {
        $this->enseignes = new ArrayCollection();
    }
    return $this->enseignes;
}

    public function addEnseigne(Enseigne $enseigne): self
    {
        if (!$this->getEnseignes()->contains($enseigne)) {
            $this->getEnseignes()->add($enseigne);
            $enseigne->addCategory($this);
        }
        return $this;
    }

    public function removeEnseigne(Enseigne $enseigne): self
    {
        if ($this->getEnseignes()->removeElement($enseigne)) {
            $enseigne->removeCategory($this);
        }
        return $this;
    }

//    /**
//  * @return Collection<int, User>
//  */
// public function getUsers(): Collection
// {
//     if ($this->users === null) {
//         $this->users = new ArrayCollection();
//     }
//     return $this->users;
// }

//     public function addUser(User $user): self
//     {
//         if (!$this->getUsers()->contains($user)) {
//             $this->getUsers()->add($user);
//             $user->addCategory($this);
//         }
//         return $this;
//     }

//     public function removeUser(User $user): self
//     {
//         if ($this->getUsers()->removeElement($user)) {
//             $user->removeCategory($this);
//         }
//         return $this;
//     }

    #[ORM\PreRemove]
    public function onPreRemove(PreRemoveEventArgs $args): void
    {
        $em = $args->getObjectManager();
        
        // Créer une copie des enseignes pour éviter les problèmes pendant l'itération
        $enseignes = $this->getEnseignes()->toArray();
    
        foreach ($enseignes as $enseigne) {
            // Retirer la catégorie de l'enseigne
            $enseigne->removeCategory($this);
            
            // Si l'enseigne n'a plus de catégories, la supprimer
            if ($enseigne->getCategories()->isEmpty()) {
                $em->remove($enseigne);
            } else {
                $em->persist($enseigne);
            }
        }
    }
    
}