<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ProduitRepository::class)]
class Produit
{
    #---------------------------------------BEGIN ATTRIBUTES ----------------------------------------------#
    #----- begin : creation Id attribute (column) --------------#
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id ;
    #----- end : creation Id attribute (column) ----------------#

    #-----------------------------------------------------------#
    #-----------------------------------------------------------#

    #----- begin : creation name attribute (column) ------------#
    #[Assert\NotBlank()]
    #[ORM\Column(length: 50)]
    #[Assert\Length(max:50,min:2)]
    private ?string $name ;
    #----- end : creation name attribute (column) --------------#

    #-----------------------------------------------------------#
    #-----------------------------------------------------------#

    #----- begin : creation name attribute (column) ------------#
    #[ORM\Column]
    #[Assert\NotNull()]
    #[Assert\Positive()]
    #[Assert\LessThan(200)]
    private ?float $price ;
    #----- begin : creation name attribute (column) ------------#

    #-----------------------------------------------------------#
    #-----------------------------------------------------------#

    #[ORM\Column]
    #[Assert\NotNull()]
    private ?\DateTimeImmutable $created_at;


    #---------------------------------------END ATTRIBUTES ------------------------------------------------#

    #----------------------- BEGIN METHODS GETTERS AND SETTERS --------------------------------------------#

    #---------------- BEGIN : SETTERS AND GETTERS FOR ID ATTRIBUTE (COLUMN) ----------------#

    public function getId(): ?int
    {
        return $this->id;
    }
    #------------------ END SETTERS AND GETTERS FOR ID ATTRIBUTE (COLUMN) -------------------#
    
    #----------------------------------------------------------------------------------------#

    #---------------- BEGIN : SETTERS AND GETTERS FOR NAME ATTRIBUTE (COLUMN) ---------------#

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
    #------------------ END SETTERS AND GETTERS FOR NAME ATTRIBUTE (COLUMN) -----------------#
    
    #----------------------------------------------------------------------------------------#

    #---------------- BEGIN : SETTERS AND GETTERS FOR PRICE ATTRIBUTE (COLUMN) --------------#

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    #------------------ END SETTERS AND GETTERS FOR PRICE ATTRIBUTE (COLUMN) ----------------#
    
    #----------------------------------------------------------------------------------------#

    #----------- BEGIN : SETTERS AND GETTERS FOR CREATED AT ATTRIBUTE (COLUMN) --------------#

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }
    #------------------ END SETTERS AND GETTERS FOR CREATED AT ATTRIBUTE (COLUMN) -----------#
    
    #----------------------------------------------------------------------------------------#

    #------------------------- END METHODS GETTERS AND SETTERS --------------------------------------------#
}
