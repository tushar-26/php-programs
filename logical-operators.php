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

/*$temp = 14;
                                 //~ both condition are true
if($temp >=0 && $temp <=30){
    echo"weather is good <br>";
}
else{
    echo"weathe is bad <br>";
}
//--------------------------------------------

$temp = 0;

if($temp)*/

    

?>