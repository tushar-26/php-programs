<html>
    <body style="background-color: black;
                 color: white">

    </body>
</html>


<?php

//?   logical operators = combine conditional statements 

//!   if(condition1 == condition2)
//&   && = true if both condition are true
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

if($cloudy){
    echo"it's cloudy <br>";
}
else{
    echo"it's sunny <br>";
}
//---------------------------------------

$temp = 14;
                                 //~ both condition are true
if($temp >=0 && $temp <=30){
    echo"weather is good <br>";
}
else{
    echo"weathe is bad <br>";
}
//--------------------------------------------



?>


<?php 

$book = "array";
$price = 70;

echo "this is about book. <br> book name is {$book}. price is {$price} <br>";
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

?>

    

