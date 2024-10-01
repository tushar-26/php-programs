<?php 
//17

$name = "Tushar Sav";
$address = "1245-hell from-china&liao";

echo $name = strtolower($name);
echo "<br>";

echo $name = strtoupper($name);
echo "<br>";

echo $name = trim($name);
echo "<br>";

echo $name = str_pad($name,12, "/");
echo "<br>";

echo $address = str_replace("-","/", $address);
echo "<br>";

echo $name = strrev($name);
echo "<br>";

echo $name = str_shuffle($name);
echo "<br>";

echo strcmp($name, "Tushar Sav");
echo "<br>";

echo $name = strlen($name);
echo "<br>";

?>