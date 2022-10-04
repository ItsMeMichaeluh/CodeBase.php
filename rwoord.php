<?php

$remember = "";
$teller = 0;
$array = array ('deltion','school','michiel',
'sporten','werken','laptop','gebouw','geweer','wolken');
$rwoord = array_rand(array_flip($array));
for ($i=0; $i < strlen($rwoord); $i++) {
$remember[$i] =  "*";
}   

$guess = 0;

while ($remember != $rwoord) {
    $teller++;
    $gevonden = false;

    $guess = readline ("raad een letter : ");
    echo "$teller\n";

        $gevonden=false;
        for ($i=0; $i < strlen($rwoord); $i++) 
         { 
          if ($guess == $rwoord[$i]){
            $remember[$i] = $guess;
            $gevonden = true;
          }
          
         }

         if
         ($gevonden == false) {
          echo "de letter zit er niet in\n";
           }
        
         echo "$remember\n";
}
echo "goed gedaan! het woord was $remember. je heb er $teller keer over gedaan.\n";
?>
  