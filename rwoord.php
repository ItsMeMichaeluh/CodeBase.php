<?php

$array = array ('deltion','school','michiel',
'sporten','werken','laptop','gebouw','geweer','wolken');
$input = array_rand(array_flip($array));

$arrayName = $input;

while ($guess =! $input); {

    $guess = readline ("raad een letter : ");

    for ($i=0; $i < strlen($arrayName); $i++) 
    { 
        if ($guess == $arrayName[$i])
        {   
            echo $arrayName[$i];
        }
        else
            echo '*';
    }      

}

?>
