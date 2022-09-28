<?php
$arrayName = 'guessword';

$guess = 'e';

for ($i=0; $i < strlen($arrayName); $i++) 
{ 
    if ($guess == $arrayName[$i])
    {
        echo $arrayName[$i];
    }
    else
        echo '*';
 }  
 ?>