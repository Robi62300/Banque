<?php
include_once("./banque/agence.php");
include_once("./banque/client.php");
include_once("./banque/compte.php");
include_once("./lib/function.php");
$choix= "";
$chaine_menu ="Bienvenue chez DWWM-02, veuillez choisir votre choix : \n 1 : créer une agence 
 2 : créer un client \n 3 : creer un compte \n 4 : recherche de compte 
 5 : recherche de client 6 : afficher la liste de comptes d'un client \n 7 : imprimer les infos client
 8 : quitter le programme";
$choix_menu= readline($chaine_menu);
do {
switch ($choix_menu) {
    case '1': 
        $donnees = [];
        $fileName="./sauv/agences/agences.csv";
        $header=['code', 'nom', 'adresse'];
        csv_to_array($donnees, $fileName, ',');
        $agence = new Agence();
        $agence ->setCodeAgence();
        $agence ->setNomAgence();
        array_push($donnees, $agence->setAdresse());
        print_r($donnees);
        arrayToCsv($agence, $fileName, ",", $header);
        break;
    case '2':
        $donnees = [];
        $header=['id', 'idAgence','nom', 'prenom', 'date', 'email'];
        $fileName="./sauv/clients/clients.csv";
        csv_to_array($donnees, $fileName, ',');
        $client= new Client();
        $client->setIdClient();
        $client->setId_agence();
        $client->setNom();
        $client->setPrenom();
        $client->setDateNaissance();
        array_push($donnees, $client->setEmail());
        print_r($donnees);
        arrayToCsv($donnees,$fileName,",",$header);
        break;
    case '3':
        $donnees = [];
        $fileName="./sauv/comptes/comptes.csv";
        $header=['numéro','idClient','type', 'solde', 'découvert'];
        csv_to_array($donnees, $fileName, ',');
        $compte = new Comptes();
        $compte ->setNumeroCompte();
        $compte ->setId_client();
        $compte ->setTypeCompte();
        $compte ->setSolde();
        array_push($donnees, $compte ->setDecouvertAutorise());
        print_r($donnees);
        arrayToCsv($donnees,$fileName,",",$header);
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
        $choix="n";//quitter le programme
        $choix_menu =10;
        goto end;
        break;
    default:
        echo("erreur de saisie dans le menu");
        break;
}
    $choix = readline("voulez-vous continuer ? (o|n)");
    end:
        if($choix ==="o"){
        $choix_menu= readline($chaine_menu);
        }else{ $choix_menu =10;}    
       
}while ($choix_menu<8);

//*masque pour la date de naissance
/*
*$valid_format_datenaiss = "#(\d{2})/(\d{2})/(\d{4})#";
*if(!preg_match($valide_format_datenaiss, chaine_date)) //ici chaine_date est la chaine de caractères qu'on rentre
*{
*    echo renter une date valide
*}
*/

//*masque pour un e-mail
/*
 *$masque = "/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+[a-zA-Z]{2,4}$/";
*
*if(preg_match($masque, $email)) 
 *{
 *       mail valide
 *}
 *mail non valide
*/

//*
 /* liste des setteurs à checker 
*setCodeAgence() : numéro d'agence différent
*setIdClient() : idclient différent 
*setId_agence() : idAgence déjà existant (pour l'agence)
*setDateNaissance() : juste le format
*setEmail() : email different
*setNumeroCompte() : numero différent
*setId_client() : idClient deja existant (pour le compte)
*setTypeCompte() : compte courant, livret A ou LEP, 1 de chaque au MAXIMUM par client, limité à 3 comptes par client
*/
