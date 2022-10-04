<?php

$remember = "";
$teller = 0;
$array = array ('deltion','school','michiel',
'sporten','werken','laptop','gebouw','geweer','wolken');
$rwoord = array_rand(array_flip($array));
for ($i=0; $i < strlen($rwoord); $i++) {
$remember = $remember. "*";
}   
echo $rwoord;

$guess = 0;

while ($remember != $rwoord) {
    $teller++;

    $guess = readline ("raad een letter : ");
    echo "$teller\n";

        for ($i=0; $i < strlen($rwoord); $i++) 
         { 
          if ($guess == $rwoord[$i]){
            $remember[$i] = $guess;
          }
        
         }
        if ($guess != $remember);
        {
        echo "je heb het niet goed\n";}
         echo "$remember\n";
}
echo "goed gedaan! het woord was $remember. je heb er $teller keer over gedaan.\n";
?>