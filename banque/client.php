<?php
class Client
{
    private string $Nom;
    private string $Prenom;
    private string $idClient;
    private string $dateNaissance;
    private string $Email;

    public function __construct($Nom, $Prenom, $idClient, $dateNaissance, $Email)
    {
        $this->Nom = $Nom;
        $this->Prenom = $Prenom;
        $this->idClient = $idClient;
        $this->dateNaissance = $dateNaissance;
        $this->Email = $Email;
    }

    public function getNom(): string
    {
        return $this->Nom;
    }
    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;
        return $this;
    }

    public function getPrenom(): string
    {
        return $this->Prenom;
    }
    public function setPrenom(string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

 
    public function getIdClient(): string
    {
        return $this->idClient;
    }
    public function setIdClient(string $idClient): self
    {
        $this->idClient = $idClient;

        return $this;
    }


    public function getDateNaissance(): string
    {
        return $this->dateNaissance;
    }
    public function setDateNaissance(string $dateNaissance): self
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }


    public function getEmail(): string
    {
        return $this->Email;
    }
    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }
}
