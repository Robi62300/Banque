<?php
//$idClient = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'),0, 2) . rand(100000, 999999);
//print_r($idClient);
include_once("./banque/agence.php");
include_once("./banque/client.php");
include_once("./banque/compte.php");
include_once("./lib/function.php");
$fileName1 = "./sauv/agences/agences.csv";
$fileName2 = "./sauv/clients/clients.csv";
$fileName3 = "./sauv/comptes/comptes.csv";
$donnees1 = [];
$donnees2 = [];
$donnees3 = [];

csv_to_array($donnees1, $fileName1, ',');
csv_to_array($donnees2, $fileName2, ',');
csv_to_array($donnees3, $fileName3, ',');
/*print_r($donnees1);
print_r($donnees2);
print_r($donnees3);*/
$id = "JM254023";
$egal= 1;


/*echo(count($donnees2));
echo($donnees2[1]['id']);*/
/*for($i=0; $i< count($donnees2); $i++){
    if($donnees2[$i]['id']===$id){
        $id = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'),0, 2) . rand(100000, 999999);
        $i=0;
    }
}
echo($id);*/
/*$id_agence =[];
for($i=0; $i< count($donnees1); $i++){
    $id_agence[$i] = $donnees1[$i]['code'];
}
$id =readline( implode("\n", $id_agence) . PHP_EOL);*/
/*$donnees = [];
$fileName="./sauv/comptes/comptes.csv";
$header=['numéro','idClient','type', 'solde', 'découvert'];
csv_to_array($donnees, $fileName, ',');
$compte = new Comptes();
$compte ->setNumeroCompte($donnees);
$compte ->setId_client();
$id = $compte->getId_client();
$compte_courant= "compte courant";
$livretA = "livret A";
$LEP = "Livret d'Epargne populaire";
$type= '';
$nbre_comptes=0;
choix:
if($nbre_comptes===3){
    echo ("Le client ne peut plus avoir de comptes supplementaires, abandon de la procédure ");
    goto sortie;
}
$choix_compte = readline ("Quel compte voulez-vous ajouter ? \n 1 : " . $compte_courant . "\n 2 : " . $livretA . "\n 3 : " . $LEP );
switch ($choix_compte) {
    case '1':
        for($i=0; $i< count($donnees); $i++){
            if($donnees[$i]['idClient']===$id){
                $type = $donnees[$i]['type'];
                if($type=== $compte_courant){
                    echo "le client a dejà un compte courant\n";
                    $nbre_comptes++;
                    goto choix;
                } else {$compte ->setTypeCompte($type);}
            }    
        }
        break;
    
     case '2':
        for($i=0; $i< count($donnees); $i++){
            if($donnees[$i]['idClient']===$id){
                $type = $donnees[$i]['type'];
                if($type=== $compte_courant){
                    echo "le client a dejà un livret A\n";
                    $nbre_comptes++;
                    goto choix;
                } else {$compte ->setTypeCompte($type);}
            }    
        }
         break;    
    
    case '3':
        for($i=0; $i< count($donnees); $i++){
            if($donnees[$i]['idClient']===$id){
                $type = $donnees[$i]['type'];
                if($type=== $compte_courant){
                    echo "le client a dejà un Livret d'Epargne populaire\n";
                    $nbre_comptes++;
                    goto choix;
                } else {$compte ->setTypeCompte($type);}
            }    
        }
         break;
    default:
        echo("mauvaise saisie");
        break;
}
sortie:
*/



/*while ($egal=1){
    debut:
    $trouve = 0;
    foreach ($donnees2 as $valeur)
    {
        foreach($valeur as $valeur2)
        {
            if ($valeur2 === $id)
            {$id = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'),0, 2) . rand(100000, 999999);
            $trouve =1;
            goto debut;}
        }
    }
    if($trouve=0){$egal=0;
    echo "id differente";}

}*/
/*function NombreDeFille($case)
{
    $fille = 0;
    foreach ($case as $valeur)
    {
        foreach($valeur as $valeur2)
        {
            if ($valeur2 == "fille")
                $fille++;
        }
    }
    return $fille;
}
echo NombreDeFille($Tablepersonne);*/