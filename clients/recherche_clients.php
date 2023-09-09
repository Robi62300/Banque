<?php

function recherche_clients(){

    $donnees_client = [];
    $donnees_compte = [];
    $donneesClient =[];
    $nombre_noms = 0;
    $fileName_client="./sauv/clients/clients.csv";
    $fileName_compte="./sauv/comptes/comptes.csv";
    csv_to_array($donnees_client, $fileName_client, ',');
    csv_to_array($donnees_compte, $fileName_compte, ',');
    $trouve = FALSE;
    $client = readline("Veuillez entrer votre recherche pour client ( champs possibles : Nom, Numéro de compte, identifiant de client : ");
    for($i=0; $i< max(count($donnees_client),count($donnees_compte)); $i++){
        if(($donnees_client[$i]['id']===$client)){
            $donneesClient = $donnees_client[$i];
            $trouve = TRUE;
            $nombre_noms++;
        }
        else if($donnees_compte[$i]['numéro']===$client){
            $donneesClient = $donnees_compte[$i];
            $trouve = TRUE;
            $nombre_noms++;
        } else if ($donnees_client[$i]['nom']===$client){
            $donneesClient = array_push($donnees_compte[$i]);
            $nombre_noms++;
            $trouve = TRUE;
        }
    }
    if(!$trouve) {
        echo"la recherche n'a pas aboutie. Retour au menu.";
        exit;}
    else if($nombre_noms=1) {echo "la recherche a donnée un resultat" . $donneesClient;}
    else{
        echo"La recherche a donnée plusieurs résultats : ". $donneesClient;
    }


}