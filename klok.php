<?php

define("INTERVAL", 1 ); 

function runIt() { 
    echo "The time is \n" . date("h:i:sa");
}



function start() {
    $active = true;
    $nextTime   = microtime(true) + INTERVAL;

    while($active) {
        usleep(1000); 

        if (microtime(true) >= $nextTime) {
            runIt();
            $nextTime = microtime(true) + INTERVAL;
        }         
   
    }
}

start ();

?>