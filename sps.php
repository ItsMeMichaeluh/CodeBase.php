<?php

$array = array ( 'steen', 'papier', 'schaar');

$steen = 'steen'; $papier = 'papier'; $schaar = 'schaar';


$p1 = 0;
$p2 = 0;

while ($p1 != 3 && $p2!= 3) {
    $sps = array_rand(array_flip($array));
    $invoer = readline (" steen, papier, schaar : ");
    echo "$sps\n";

    if ($invoer == "steen" && $sps == "schaar") {
        echo "goedzo\n";
        $p1++;
   
    }

    if ($invoer == "papier" && $sps == "schaar"){
        echo "helaas\n";
        $p2++;
    }

    if ($invoer == "steen" && $sps == "papier"){
        echo "helaas\n";
        $p2++;
    }

    if ($invoer == "schaar" && $sps == "steen"){
        echo "helaas\n";
        $p2++;
    }



    if ($invoer == "papier" && $sps == "steen") {
        echo "goedzo\n";
        $p1++;
    
    }

    if ($invoer == "schaar" && $sps == "papier") {
        echo "goedzo\n";
        $p1++;
    
    }
    
     if ($invoer == $sps) {
        echo "gelijk spel\n";
    }
   
    
    if ($p2 == 3){
        echo "helaas, je heb verloren\n";
    }

    if ($p1 == 3){
        echo "gefeliciteerd, je heb gewonnen!\n";
    }

    echo "$p1 - $p2\n";
}



?>