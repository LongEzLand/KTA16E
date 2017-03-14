<?php

require 'function.php';
home();

$month = "veebruar";

$test = array('kolmapäev', 3.14, $month, 8, "Klass nr A210");

//massiisisisu trükk
print_r($test);
echo"<br>";

//Muutuja sisu näitamine
var_dump($test);
echo "<br>";

//masiivi ühe elemendi näitamine
echo $test[0];
echo "<br>";

//massiivi liikme lisamine
$test[] = "uus massiivi liige";
print_r($test);
echo "<br>";

//assotiative array - sidusmassiiv    
$test_a = array('esimene' => 'Tauno',
                'teine' => 'Ragnar',
                'kolmas' => 'Kevin' );
print_r($test_a);

//"for" tsükkel
for ($i=0; $i < count($test); $i++){
    echo "<li>".$test[$i]."</li><br>";
}
foreach($test_a as $jrk => $name){
    echo "<li>".$name." on järjekorras ".$jrk."</li>";
}

?>