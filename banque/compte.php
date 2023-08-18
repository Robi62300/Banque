<?php
class Comptes {
    private int $numeroCompte;
    private int $codeAgence;
    private string $idClient;
    private float $solde;
    private bool $decouvertAutorise;

    public function __construct($numeroCompte, $codeAgence, $idClient, $solde, $decouvertAutorise)
    {
        $this->numeroCompte = $numeroCompte;
        $this->codeAgence = $codeAgence;
        $this->idClient = $idClient;
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

    public function getCodeAgence(): int
    {
        return $this->codeAgence;
    }

    public function setCodeAgence(int $codeAgence): self
    {
        $this->codeAgence = $codeAgence;

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