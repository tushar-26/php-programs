<?php
//11
//? array = "varialble" which can hold more than one value at a time

/*$fruit1 = "apple";
$fruit2 = "banana";
$fruit3 = "guava";       //!vormie method of printing multiple variables  😂
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
 

 echo "<br>";
 print_r($food);

 //
 echo "<br>";

 $name = array("tush","har","dig");

$name[3] = "kar"; //add
$name[1] = "harsh"; //change,update
array_push($name,"vraj","roh");
//array_shift($name); //remove first
//array_pop($name);  //remove last

$re = array_reverse($name);

//$merge = array_merge($food,$name);

print_r($name);

echo $name[0] . "is im and " . $name[1] . " is my bro";

foreach($re as $key=>$value){
   echo $re;
}
?>


