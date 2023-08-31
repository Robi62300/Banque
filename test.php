<?php
//$idClient = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'),0, 2) . rand(100000, 999999);
//print_r($idClient);

include_once("./lib/function.php");
$fileName = "./sauv/agences/agences.csv";
$donnees = [];
csv_to_array($donnees, $fileName, ',');
print_r($donnees);