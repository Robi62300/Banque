<?php
include_once("./lib/function.php");
class Client
{
    private string $idClient;
    private int $id_agence;
    private string $Nom;
    private string $Prenom;
    private string $dateNaissance;
    private string $Email;

    public function __construct() {}

    public function getIdClient(): string
    {
        return $this->idClient;
    }
    public function setIdClient($donnees): self
    {   $idClient = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'),0, 2) . rand(100000, 999999);
        for($i=0; $i< count($donnees); $i++){
            if($donnees[$i]['id']===$idClient){
                $idClient = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'),0, 2) . rand(100000, 999999);
                $i=0;
            }
        }
        $this->idClient = $idClient;
        return $this;
    }

    public function getId_agence(): int
    {
        return $this->id_agence;
    }

    public function setId_agence(): self
    {   $id_agence = readline("veuillez entrer l'iD de l'agence : ");
        debut_i:
        $donnees_agence =[];
        $trouve = FALSE;
        csv_to_array($donnees_agence, "./sauv/agences/agences.csv", ',');
        for($i=0; $i< count($donnees_agence); $i++){
            if($donnees_agence[$i]['code']===$id_agence){
                $trouve= TRUE;
                $this->id_agence = $id_agence;   
            }
        }
        if (!$trouve){
            $id_agence =[];
            for($i=0; $i< count($donnees_agence); $i++){
                $id_agence[$i] = $donnees_agence[$i]['code'];
            }
            echo" Agence non trouvée dans les données. Veuillez choisir parmi la liste donnée : ";
            $id_agence= readline(implode("\n", $id_agence));
            goto debut_i;
        }
        return $this;
    }

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

    public function getDateNaissance(): string
    {
        return $this->dateNaissance;
    }
    public function setDateNaissance(): self
    {$dateNaissance = readline("veuillez entrer la date de naissance du client au format DD/MM/YYYY: ");
        debut1:
        $valid_format_datenaiss = "#(\d{2})/(\d{2})/(\d{4})#";
        if(!preg_match($valid_format_datenaiss, $dateNaissance)) 
            {$dateNaissance=readline( 'renter une date valide');
            goto debut1;}
        $this->dateNaissance = $dateNaissance;
        return $this;
    }

    public function getEmail(): string
    {
        return $this->Email;
    }

    public function setEmail($donnees): self
    {$Email = readline("veuillez entrer l'email du client : ");
        debut2:
        $masque = "/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+[a-zA-Z]{2,4}$/";
        if(!preg_match($masque, $Email)) 
        {$Email = readline('rentrer un email avec un format valide');
        goto debut2;}
        for($i=0; $i< count($donnees); $i++){
            if($donnees[$i]['email']===$Email){
                echo('Email déjà utilisé');
                $Email = readline("veuillez entrer l'email du client : ");
                $i=0;
                goto debut2;
            }
        }
        $this->Email = $Email;
        return $this;
    }    
}
