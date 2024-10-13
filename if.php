<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body style="background-color: black; color: white;">
    <form action="if.php" method="get">
        <lable>Age :</lable>
        <input type="text" name="age" placeholder="age">
        <input type="submit" style="background-color:blueviolet; color: orange; padding: 7px;">
    </form>
    
</body>
</html>

<?php 
//6

$age = $_GET["age"];
 
if($age >=75){
    echo"u r too old";
}

elseif($age >=18){

echo "you are eligible";
}
elseif($age == 0){
    echo"u r newborn";
}
elseif($age <= 5){
    echo"u r still newborn";
}

else{
    echo"you aren't eligible";
}

//~ normal if statement workong with function


?>


<?php 

$a = 4;

if($a %2 == 0){

echo "value is even";

}
else{

echo "value is odd";
}



echo "<br>";

$b = 4;

if($b <=1){
    echo "its not prime";
}
else{
    echo "no is prime";
}

?>




