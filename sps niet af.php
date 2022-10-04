<?php

$array = array ( 'steen', 'papier', 'schaar');

$steen = 'steen'; $papier = 'papier'; $schaar = 'schaar';

$steen > $schaar;
$papier > $steen;
$schaar > $papier;
$remember = 0;
$remember2 = 0;

while ($remember != 3 && $remember2 != 3) {
    $sps = array_rand(array_flip($array));
    $invoer = readline (" steen, papier, schaar : ");
    echo "$sps\n";

    if ($invoer < $sps) {
        echo "goedzo\n";
        $remember++;
    }   

    if ($invoer > $sps) {
        echo "helaas\n";
        $remember2++;
    }

    if ($invoer == $sps) {
        echo "gelijk spel\n";
    }
    echo ("$remember - $remember2\n");
    
    if ($remember2 == 3){
        echo "helaas, je heb verloren\n";
    }

    if ($remember == 3){
        echo "gefeliciteerd, je heb gewonnen!\n";
    }
}



?>