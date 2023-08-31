<?php
class Comptes {
    private int $numeroCompte;
    private string $idClient;
    private string $typeCompte;
    private float $solde;
    private bool $decouvertAutorise;
    
    public function __construct()
    {}
    
    public function getNumeroCompte(): int
    {
        return $this->numeroCompte;
    }

    public function setNumeroCompte(): self
    {   $numeroCompte = rand (10000000000, 99999999999);
        $this->numeroCompte = $numeroCompte;
        
        return $this;
    }
     
    public function getIdClient(): string
    {
        return $this->idClient;
    }

    
    public function setIdClient(): self
    {    $idClient = readline(" Renseignez l'iD du client s'il vous plait : ");
        $this->idClient = $idClient;

        return $this;
    }
    
    public function getTypeCompte(): string
    {
        return $this->typeCompte;
    }

    public function setTypeCompte(): self
    {   $typeCompte = readline(" Renseignez votre type de compte s'il vous plait : ");
        $this->typeCompte = $typeCompte;

        return $this;
    }

    public function getSolde(): float
    {
        return $this->solde;
    }

    public function setSolde(): self
    {   $solde = readline(" Renseignez votre solde de compte s'il vous plait : ");
        $this->solde = $solde;

        return $this;
    }

    public function getDecouvertAutorise(): bool
    {
        return $this->decouvertAutorise;
    }

    public function setDecouvertAutorise(): self
    {   $decouvertAutorise = readline(" Renseignez votre decouvert de compte s'il vous plait : ");
        $this->decouvertAutorise = $decouvertAutorise;

        return $this;
    }

   
}