<?php
class agence {
    private int $CodeAgence;
    private string $NomAgence;
    private string $adresse;

    public function __construct()
{}

    public function getCodeAgence(): int
    {   
        return $this->CodeAgence;
    }

    
    public function setCodeAgence(): self
    {   
        $CodeAgence = readline ("Entrez votre code agence s'il vous plait (3 chiffres) : ");
        $this->CodeAgence = $CodeAgence;

        return $this;
    }

    
    public function getNomAgence(): string
    {
        return $this->NomAgence;
    }

   
    public function setNomAgence(): self
    {   $NomAgence = readline ("Renseignez le nom de l'agence : ");
        $this->NomAgence = $NomAgence;

        return $this;
    }

  
    public function getAdresse(): string
    {
        return $this->adresse;
    }

   
    public function setAdresse(): self
    {   $adresse = readline(" Renseignez votre adresse s'il vous plait : ");
        $this->adresse = $adresse;

        return $this;
    }
}
