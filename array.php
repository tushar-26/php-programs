<?php
//? array = "varialble" which can hold more than one value at a time

/*$fruit1 = "apple";
$fruit2 = "banana";
$fruit3 = "guava";
$fruit4 = "mango";
$fruit5 = "orange";*/

$food = array("apple","banana","guava","mango","orange");

 /*echo $food[4] . " fruit <br>";
 echo $food[3] . " fruit <br>";
 echo $food[2] . " fruit <br>";
 echo $food[1] . " fruit <br>";*/

$food[1] = "cherry";

//? foreach is better way for print all arrays
 foreach($food as $fruit){
    echo $fruit . " fruit <br>";
 }

?>


