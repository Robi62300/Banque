<?php
$idClient = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'),0, 2) . rand(100000, 999999);
print_r($idClient);