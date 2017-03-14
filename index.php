<?php
require 'components.php';
require 'function.php';
$name = "Martini";

//tagasi algusesse
home();

menu($menu_begin, $menu_arr, $menu_end);
//näitame praegust aega ja anname soovitusi
aeg();

//näited teksti kuvamise kohta
echo "<br>";
echo "$name esimene phps kirjutatud lause!<br>";

echo '$name esimene phps kirjutatud lause!';

echo "Nüüd vaatame täpitähti<br>";

?>