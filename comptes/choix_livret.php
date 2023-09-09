<?php
function choix_livret($donnees, $compte){
        $id = $compte->getId_client();
        $compte_courant= "compte courant";
        $livretA = "livret A";
        $LEP = "Livret d'Epargne populaire";
        $type= '';
        $nbre_comptes=0;
        choix:
        if($nbre_comptes===3){
            echo ("Le client ne peut plus avoir de comptes supplementaires, abandon de la procédure ");
            return "EXIT";
            exit;
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
                if($type=== $livretA){
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
                if($type=== $LEP){
                    echo "le client a dejà un Livret d'Epargne Populaire\n";
                    $nbre_comptes++;
                    goto choix;
                } else {$compte ->setTypeCompte($type);}
            }    
        }
        break;
        default:
            echo("mauvaise saisie");
            goto choix;
        break;
        }
}