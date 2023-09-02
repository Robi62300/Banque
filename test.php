<?php
//$idClient = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'),0, 2) . rand(100000, 999999);
//print_r($idClient);

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
for($i=0; $i< count($donnees2); $i++){
    if($donnees2[$i]['id']===$id){
        $id = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'),0, 2) . rand(100000, 999999);
        $i=0;
    }
}
echo($id);




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