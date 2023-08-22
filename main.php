<?php

include_once("./banque/agence.php");
include_once("./banque/client.php");
include_once("./banque/compte.php");
include_once("./lib/function.php");

$chaine_menu ="Bienvenue chez DWWM-02, veuillez choisir votre choix : ";
$choix_menu= readline($chaine_menu);
switch ($choix_menu) {
    case '1':
        $agence = new Agence();
        $agence ->setCodeAgence();
        $agence ->setNomAgence();
        $agence->setAdresse();
        break;
    case '2':
        $client= new Client();
        $client->setIdClient();
        $client->setNom();
        $client->setPrenom();
        $client->setDateNaissance();
        $client->setEmail();
        arrayToCsv($client, "./sauv/clients/clients.csv", ",");
        print_r($client);
        break;
    case '3':
       $compte = new Comptes();
       $compte ->setNumeroCompte();
       $compte ->setTypeCompte();
       $compte ->setSolde();
       $compte ->setDecouvertAutorise();

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
        break;
    default:
        echo("erreur de saisie dans le menu");
        break;
}

// $nom=new Client("toto", "tata", "uiyefuif", "hfufh", "ygeagyzg");
// $nom->setNom();
// $agence = new agence ();
// $agence ->set

//substr(str_shuffle($x= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'),0, 2); //donne 2 majuscules aléatoires
//rand(10000000000, 99999999999); génère un nombre de 11 chiffres
//rand(100000, 999999); 6 chiffres
//rand(100, 999); 3 chiffres
