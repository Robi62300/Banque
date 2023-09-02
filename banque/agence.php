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

    
    public function setCodeAgence($donnees): self
    {   
        $CodeAgence = rand (100, 999);
        for($i=0; $i< count($donnees); $i++){
            if($donnees[$i]['code']===$CodeAgence){
                $CodeAgence = rand (100, 999);
                $i=0;
            }
        }
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
    {   $adresse = readline("Renseignez l'adresse de l'agence : ");
        $this->adresse = $adresse;

        return $this;
    }
}
