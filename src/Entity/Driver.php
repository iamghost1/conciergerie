<?php

namespace App\Entity;

use App\Repository\DriverRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DriverRepository::class)
 */
class Driver
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lastname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $firstname;

    /**
     * @ORM\Column(type="text")
     */
    private $biography;

    /**
     * @ORM\Column(type="integer")
     */
    private $years_of_experience;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $languages;

    /**
     * @ORM\Column(type="boolean")
     */
    private $special_trainging;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

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

    public function getBiography(): ?string
    {
        return $this->biography;
    }

    public function setBiography(string $biography): self
    {
        $this->biography = $biography;

        return $this;
    }

    public function getYearsOfExperience(): ?int
    {
        return $this->years_of_experience;
    }

    public function setYearsOfExperience(int $years_of_experience): self
    {
        $this->years_of_experience = $years_of_experience;

        return $this;
    }

    public function getLanguages(): ?string
    {
        return $this->languages;
    }

    public function setLanguages(string $languages): self
    {
        $this->languages = $languages;

        return $this;
    }

    public function getSpecialTrainging(): ?bool
    {
        return $this->special_trainging;
    }

    public function setSpecialTrainging(bool $special_trainging): self
    {
        $this->special_trainging = $special_trainging;

        return $this;
    }
}
