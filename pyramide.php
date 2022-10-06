<?php

$aantalregels=6; //bepaalt het aantal regels dat de pyramide krijgt

//zolang $regel (het aantal regels) lager is dan $aantalregels (bepaald het aantal regels)
for($regel=1; $regel <= $aantalregels; $regel++) {
    //dit is de som zodat er elke keer +2 sterren komen voorbeeld regel 2: (2x2)-1= 3 sterren, regel 3: (2x3)-1 = 5 sterren
    for ($ster=1; $ster<=(2*$aantalregels)-1; $ster++) {
        //
        if ($ster >= $aantalregels-($regel-1) && $ster <= $aantalregels+($regel-1)) {
            //deze echo print de sterren
            echo "*";
        } else {
            //deze echo print de spaties
            echo " ";
        }
    }
//deze echo zorgt ervoor dat de regels onder elkaar staan
echo "\n";
                  //true = * | false = " " 
//regel 1: 4 - (1-1) = 4     &     4 + (1-1) = 4     =>4 & <=4 =    *    
//regel 2: 4 - (2-1) = 3     &     4 + (2-1) = 5     =>3 & <=5 =   *  
//regel 3: 4 - (3-1) = 2     &     4 + (3-1) = 6     =>2 & <=6 =  *** 
//regel 4: 4 - (4-1) = 1     &     4 + (4-1) = 7     =>1 & <=7 = ***
}
?>
