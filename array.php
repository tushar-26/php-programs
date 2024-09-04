<?php
//? array = "varialble" which can hold more than one value at a time

/*$fruit1 = "apple";
$fruit2 = "banana";
$fruit3 = "guava";       //^average method of printing multiple variables  😂
$fruit4 = "mango";
$fruit5 = "orange";*/

$food = array("apple","banana","guava","mango","orange");

 /*echo $food[4] . " fruit <br>";
 echo $food[3] . " fruit <br>";
 echo $food[2] . " fruit <br>";
 echo $food[1] . " fruit <br>";*/

//$food[0] = "kiwi";

array_push($food, "cherry", "pineapple");
//$food[8] = "almond";
//echo $food[6];
//array_pop($food);  //removing last array
//array_shift($food);   //removing first array
//$food = array_reverse($food);
 $foods = count($food);
 echo "total numbers of fruits is {$foods} <br>";
 //echo $food[6];


//? foreach is better way for print all arrays
 foreach($food as $array1){
    echo $array1. " fruit <br>";
 }

?>


