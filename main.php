<?php
<<<<<<< HEAD
=======
include_once("./banque/agence.php");
include_once("./banque/client.php");
include_once("./banque/compte.php");

$chaine_menu ="Bienvenue chez DWWM-02, veuillez choisir votre choix : ";
$choix_menu= readline($chaine_menu);
switch ($choix_menu) {
    case '1':
        //créer une agence
        break;
    case '2':
        //créer un client
        break;
    case '3':
        //créer un compte bancaire
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
$nom=new Client("toto", "tata", "uiyefuif", "hfufh", "ygeagyzg");
$nom->setNom();
>>>>>>> 81236ec107ec9267674dc20b8326c77f6620ff29
