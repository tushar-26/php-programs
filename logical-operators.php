<html>
    <body style="background-color: black;
                 color: white">

    </body>
</html>


<?php
//7

//?   logical operators r combine conditional statements 
//!   if(condition1 == condition2)

//&   && true if both condition are true
//*   || true if atleast one condition is true
//^   ! true if false, false if true
?>

<?php 

$temp = -4;
$cloudy = true;
                                  //? atleast one condition is true
if($temp < 0 || $temp > 30){
    echo"weather is bad <br>";
}
else{
    echo"weather is good <br>.";
}

if($cloudy == true){
    echo"it's cloudy <br>";
}
else{
    echo"it's sunny <br>";
}
//---------------------------------------

$temp = 5;
                                 //~ both condition are true
if($temp >=0 && $temp <=30){
    echo"weather is good <br>";
}
else{
    echo"weather is bad <br>";
}
//--------------------------------------------



?>


<?php 

$book = "array";
$price = 100;

echo "this is about book.book name is {$book}. price is {$price} <br>";
echo "<br>";

if($price == 406){
    echo"you can purchase {$book} book😊";
}
elseif($price == 350 || $price == 405){
    echo"just need to earn more money😀";
}
elseif($price >=150 && $price <=349){
    echo"u dont have enough money🥲";
}
elseif($price >406){
    echo"you can easily purchase this {$book} book😎";
}
elseif($price >=10 && $price <=149){
    echo"idiot earn first then come😂";
}
echo "<br>";

?>

<?php 

$age = 18;
$citizen = false;

if(!$age >= 18 || !$citizen){
  echo "u cannot vote <br>";
}
else{
    echo "u can vote <br>";
}
//~----------------------------------------

$child = true;
$senior = false;
$ticket = null;

if($child || $senior){
    $ticket = 10;
    echo "you are eligible for discount <br>";
}
else{
    $ticket = 15 + 1;
    echo "you aren't eligible for discount<br>";
}
echo "ticket price is for you :\${$ticket} <br>";
?>

<?php 

$grade = "B";

if($grade == "A"){
    echo "exellent";
}
elseif($grade == "B"){
    echo "very good";
}
elseif($grade == "C"){
    echo "good";
}
elseif($grade == "D"){
    echo "needs improvement";
}
elseif($grade == "E"){
    echo "disqualify";
}
else{
    echo"{$grade} ERROR 404 <br>";
}
 echo "<br>thank you";



?>

    

