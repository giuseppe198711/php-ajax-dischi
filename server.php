<?php
// include il nostro file database
include "db.php";
// risponde alla chiamata in formato json e non html
header('Content-Type: application/json');
// per trasformare il nostro array in un json ma ha bisogno dell' echo per essere stampato
//  e sotanzialmente andremo a stampare una sorta di stringa.
//  se vogliamo lavorare con il nostro javascript e contattare il nostro server la lingua
// con cui andremo a comunicare tra client e server sarà il jason

echo json_encode($database);
?>
