<?php
class Client
{
    private string $idClient;
    private string $Nom;
    private string $Prenom;
    private string $dateNaissance;
    private string $Email;

    public function __construct()
    {}
    

    public function getNom(): string
    {
        return $this->Nom;
    }
    public function setNom(): self
    {   $Nom = readline("veuillez entrer le nom du client : ");
        $this->Nom = $Nom;
        return $this;
    }

    public function getPrenom(): string
    {
        return $this->Prenom;
    }
    public function setPrenom(): self
    {   $Prenom = readline("veuillez entrer le prénom du client : ");
        $this->Prenom = $Prenom;

        return $this;
    }

 
    public function getIdClient(): string
    {
        return $this->idClient;
    }
    public function setIdClient(): self
    {$idClient = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'),0, 2) . rand(100000, 999999);
        $this->idClient = $idClient;

        return $this;
    }


    public function getDateNaissance(): string
    {
        return $this->dateNaissance;
    }
    public function setDateNaissance(): self
    {$dateNaissance = readline("veuillez entrer la date de naissance du client : ");
        $this->dateNaissance = $dateNaissance;

        return $this;
    }


    public function getEmail(): string
    {
        return $this->Email;
    }
    public function setEmail(): self
    {$Email = readline("veuillez entrer l'email du client : ");
        $this->Email = $Email;

        return $this;
    }
}
