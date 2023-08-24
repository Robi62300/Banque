<?php

include_once("./banque/agence.php");
include_once("./banque/client.php");
include_once("./banque/compte.php");
include_once("./lib/function.php");

$chaine_menu ="Bienvenue chez DWWM-02, veuillez choisir votre choix : ";
$choix_menu= readline($chaine_menu);
do {
switch ($choix_menu) {
    case '1': 
        $donnees = [];
        $agence = new Agence();
        $agence ->setCodeAgence();
        $agence ->setNomAgence();
        array_push($donnees, $agence->setAdresse());
        $fileName = "./sauv/agences/agences.csv";
        var_dump($agence);
        arrayToCsv($agence, $fileName, ",");
        break;
    case '2':
        $donnees = [];
        $client= new Client();
        $client->setIdClient();
        $client->setNom();
        $client->setPrenom();
        $client->setDateNaissance();
        array_push($donnees, $client->setEmail());
        arrayToCsv($donnees, "./sauv/clients/clients.csv", ",");
        print_r($donnees);
        break;
    case '3':
       $donnees = [];
       $compte = new Comptes();
       $compte ->setNumeroCompte();
       $compte ->setTypeCompte();
       $compte ->setSolde();
       array_push($donnees, $compte ->setDecouvertAutorise());
       arrayToCsv($donnees, "./sauv/comptes/comptes.csv", ",");
        break;
    case '4':
        // recherche de compte
        break;
    case '5':
        // recherche de client
        break;
    case '6':
        //afficher la liste des comptes d'un client
        break;
    case '7':
        //imprimer les infos clients
        break;
    case '8':
        //quitter le programme
        $choix_menu =10;
        break;
    default:
        echo("erreur de saisie dans le menu");
        $choix_menu=10;
        break;
}
}while ($choix_menu<10);
// $nom=new Client("toto", "tata", "uiyefuif", "hfufh", "ygeagyzg");
// $nom->setNom();
// $agence = new agence ();
// $agence ->set

//substr(str_shuffle($x= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'),0, 2); //donne 2 majuscules aléatoires
//rand(10000000000, 99999999999); génère un nombre de 11 chiffres
//rand(100000, 999999); 6 chiffres
//rand(100, 999); 3 chiffres 

//masque pour la date de naissance
/*
$valid_format_datenaiss = "#(\d{2})/(\d{2})/(\d{4})#";
if(!preg_match($valide_format_datenaiss, chaine_date)) //ici chaine_date est la chaine de caractères qu'on rentre
{
    echo renter une date valide
}
*/

//masque pour un e-mail
/*
 $masque = "/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+[a-zA-Z]{2,4}$/";

if(preg_match($masque, $email)) 
 {
        mail valide
 }
 mail non valide
*/