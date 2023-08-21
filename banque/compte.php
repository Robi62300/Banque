<?php
class Comptes {
    private int $numeroCompte;
    private string $typeCompte;
    private float $solde;
    private bool $decouvertAutorise;
    
    public function __construct($numeroCompte, $typeCompte, $solde, $decouvertAutorise)
    {
        $this->numeroCompte = $numeroCompte;
        $this->typeCompte= $typeCompte;
        $this->solde = $solde;
        $this->decouvertAutorise= $decouvertAutorise;
    }
    
    public function getNumeroCompte(): int
    {
        return $this->numeroCompte;
    }

    public function setNumeroCompte(int $numeroCompte): self
    {
        $this->numeroCompte = $numeroCompte;
        
        return $this;
    }
    
    public function getTypeCompte(): string
    {
        return $this->typeCompte;
    }

    public function setTypeCompte(string $typeCompte): self
    {
        $this->typeCompte = $typeCompte;

        return $this;
    }

    public function getSolde(): float
    {
        return $this->solde;
    }

    public function setSolde(float $solde): self
    {
        $this->solde = $solde;

        return $this;
    }

    public function getDecouvertAutorise(): bool
    {
        return $this->decouvertAutorise;
    }

    public function setDecouvertAutorise(bool $decouvertAutorise): self
    {
        $this->decouvertAutorise = $decouvertAutorise;

        return $this;
    }
}