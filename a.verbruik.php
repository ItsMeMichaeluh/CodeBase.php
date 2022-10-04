<?php

$aantalliter = readline("Hoeveel liter zit er in de tank?:\n");
$aantalliternarit = readline("Hoeveel liter zit er nog in de tank na de rit?:\n");
$kmbegin = readline("Hoeveel kilometer stond er op de teller aan het begin van de rit?:\n");
$kmeind = readline("Hoeveel kilometer stond er op de teller aan het eind van de rit?:\n");

$verbruik = (100 * ($aantalliter - $aantalliternarit) / ($kmeind - $kmbegin));

echo "Je verbruik is $verbruik op 100.";

?>