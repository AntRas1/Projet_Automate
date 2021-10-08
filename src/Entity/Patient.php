<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Entity;


/**
 * @Enti
 */
class Patient
{
    /**
     * @param string $nomP
     * @param string $prenomP
     * @param string $genre
     * @param int|null $age
     * @param int|null $idP
     * @param string $GrpSang
     * @param string $N_SeSoc
     */

private ?int $idP;
private string $nomP;
private string $prenomP;
private string $Genre;
private ?int $age;
private string $GrpSang;
private string $N_SecSoc;

    /**
     * @param string $nomP
     * @param string $prenomP
     * @param string $Genre
     * @param int|null $age
     * @param string $GrpSang
     * @param string $N_SecSoc
     */
    public function __construct(string $nomP, string $prenomP, string $Genre, ?int $age, string $GrpSang, string $N_SecSoc)
    {
        $this->nomP = $nomP;
        $this->prenomP = $prenomP;
        $this->Genre = $Genre;
        $this->age = $age;
        $this->GrpSang = $GrpSang;
        $this->N_SecSoc = $N_SecSoc;
    }

    /**
     * @return string
     */
    public function getNomP(): string
    {
        return $this->nomP;
    }

    /**
     * @param string $nomP
     */
    public function setNomP(string $nomP): void
    {
        $this->nomP = $nomP;
    }

    /**
     * @return string
     */
    public function getPrenomP(): string
    {
        return $this->prenomP;
    }

    /**
     * @param string $prenomP
     */
    public function setPrenomP(string $prenomP): void
    {
        $this->prenomP = $prenomP;
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
     * @return int|null
     */
    public function getAge(): ?int
    {
        return $this->age;
    }

    /**
     * @param int|null $age
     */
    public function setAge(?int $age): void
    {
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getGrpSang(): string
    {
        return $this->GrpSang;
    }

    /**
     * @param string $GrpSang
     */
    public function setGrpSang(string $GrpSang): void
    {
        $this->GrpSang = $GrpSang;
    }

    /**
     * @return string
     */
    public function getNSecSoc(): string
    {
        return $this->N_SecSoc;
    }

    /**
     * @param string $N_SecSoc
     */
    public function setNSecSoc(string $N_SecSoc): void
    {
        $this->N_SecSoc = $N_SecSoc;
    }

    /**
     * @return int|null
     */
    public function getIdP(): ?int
    {
        return $this->idP;
    }


}