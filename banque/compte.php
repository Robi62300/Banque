<?php
include_once("./lib/function.php");
class Comptes {
    private int $numeroCompte;
    private string $id_client;
    private string $typeCompte;
    private float $solde;
    private bool $decouvertAutorise;
    
    public function __construct() {}
    
    public function getNumeroCompte(): int
    {
        return $this->numeroCompte;
    }

    public function setNumeroCompte($donnees): self
    {   $numeroCompte = rand (10000000000, 99999999999);
        for($i=0; $i< count($donnees); $i++){
            if($donnees[$i]['numéro']===$numeroCompte){
                $numeroCompte = rand (10000000000, 99999999999);
                $i=0;
            }
        }
        $this->numeroCompte = $numeroCompte;
        return $this;
    }
     
    public function getId_client(): string
    {
        return $this->id_client;
    }

    
    public function setId_client(): self
    {   $id_client = readline(" Renseignez l'iD du client s'il vous plait : ");
        debut_i:
        $donnees_client =[];
        $trouve = FALSE;
        csv_to_array($donnees_client, "./sauv/clients/clients.csv", ',');
        for($i=0; $i< count($donnees_client); $i++){
            if($donnees_client[$i]['id']===$id_client){
                $trouve= TRUE;
                $this->id_client = $id_client;
            }    
        }
        if (!$trouve){
            $id_client =[];
            for($i=0; $i< count($donnees_client); $i++){
                $id_client[$i] = $donnees_client[$i]['id'];
            }
            echo" Client non trouvée dans les données. Veuillez choisir parmi la liste donnée : ";
            $id_client= readline(implode("\n", $id_client));
            goto debut_i;
        }
        return $this;
    }
    
    public function getTypeCompte(): string
    {
        return $this->typeCompte;
    }

    public function setTypeCompte($typeCompte): self
    {   
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
    {   $decouvertAutorise = readline(" Renseignez si votre compte peut etre à découvert : ");
        $this->decouvertAutorise = $decouvertAutorise;
        return $this;
    } 
}