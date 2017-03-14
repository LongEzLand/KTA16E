<?php

function aeg(){
    date_default_timezone_set("Europe/Tallinn");
    $time = date("H:i:s");//i=minutid
    
    if ($time >= 17){
        echo "Kell on ".$time."Aeg on koju minna<br>";
    } else {
        echo "Kell on ".$time." Peab veel kannatama!<br>";
    }
    
}
function home(){
    echo '<li><a href="index.php">Tagasi koju</a>
    
    </li>';
    
}

?>