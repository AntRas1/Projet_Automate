<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Entity;

/**
* @Entity
* @ORM\Table(name="Patient")
*/
class Patient
{
/**
* @var int
     * @ORM\Column(name="IdP", type="integer")
     * @ORM\GeneratedValue()
     * @ORM\Id()
     */
    public ?int $IdP =null;

    /**
     * @var string
     * @ORM\Column(name="NomP", type="string")
     */
    public String $NomP;

    /**
     * @var string
     * @ORM\Column(name="PrenomP", type="string")
     */
    public String $PrenomP;

    /**
     * @var string
     * @ORM\Column(name="Genre", type="string")
     */
    public String $Genre;

    /**
     * @var int
     * @ORM\Column(name="Age", type="integer")
     */
    public int $Age;

    /**
     * @var string
     * @ORM\Column(name="Groupe_Sanguin", type="string")
     */
    public String $GroupeSanguin;

    /**
     * @var int
     * @ORM\Column(name="N_Securite_Social", type="integer")
     */
    public int $NSecuriteSocial;
/**
* @param String $NomP
* @param String $PrenomP
* @param String $Genre
* @param int $Age
* @param String $GroupeSanguin
* @param int $NSecuriteSocial
*/
    public function __construct(string $NomP, string $PrenomP, string $Genre, int $Age, string $GroupeSanguin, int $NSecuriteSocial)
    {
        $this->NomP = $NomP;
        $this->PrenomP = $PrenomP;
        $this->Genre = $Genre;
        $this->Age = $Age;
        $this->GroupeSanguin = $GroupeSanguin;
        $this->NSecuriteSocial = $NSecuriteSocial;
    }

/**
* @return string
*/
    public function getNomP(): string
    {
        return $this->NomP;
    }

/**
* @param string $NomP
*/
    public function setNomP(string $NomP): void
    {
        $this->NomP = $NomP;
    }

/**
* @return string
*/
    public function getPrenomP(): string
    {
        return $this->PrenomP;
    }

/**
* @param string $PrenomP
*/
    public function setPrenomP(string $PrenomP): void
    {
        $this->PrenomP = $PrenomP;
    }

/**
* @return string
*/
    public function getGenre(): string
    {
        return $this->Genre;
    }

/**
* @param string $Genre
*/
    public function setGenre(string $Genre): void
    {
        $this->Genre = $Genre;
    }

/**
* @return int
*/
    public function getAge(): int
    {
        return $this->Age;
    }

    /**
     * @param int $Age
     */
    public function setAge(int $Age): void
    {
        $this->Age = $Age;
    }
/**
* @return string
*/
    public function getGroupeSanguin(): string
    {
        return $this->GroupeSanguin;
    }

/**
* @param string $GroupeSanguin
*/
    public function setGroupeSanguin(string $GroupeSanguin): void
    {
        $this->GroupeSanguin = $GroupeSanguin;
    }

/**
* @return int
*/
    public function getNSecuriteSocial(): int
    {
        return $this->NSecuriteSocial;
    }

/**
* @param int $NSecuriteSocial
*/
    public function setNSecuriteSocial(int $NSecuriteSocial): void
    {
        $this->NSecuriteSocial = $NSecuriteSocial;
    }


}