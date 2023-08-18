<?php
class agence {
    private int $CodeAgence;
    private string $NomAgence;
    private string $adresse;

    public function __construct($CodeAgence, $NomAgence, $adresse)
{      
    $this->CodeAgence= $CodeAgence;
    $this->NomAgence=$NomAgence;
    $this->adresse=$adresse;
}
    public function getCodeAgence(): int
    {
        return $this->CodeAgence;
    }

    
    public function setCodeAgence(int $CodeAgence): self
    {
        $this->CodeAgence = $CodeAgence;

        return $this;
    }

    
    public function getNomAgence(): string
    {
        return $this->NomAgence;
    }

   
    public function setNomAgence(string $NomAgence): self
    {
        $this->NomAgence = $NomAgence;

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
}
