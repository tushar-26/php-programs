<?php 

$adult = false;

if($adult == true){

  echo"u can enter <br>";  
}
else{
    echo"no <br>";
}


?>

<?php 

$hours = 50;
$rate = 15;
$weekley_pay = null;

if($hours <=0){
    $weekley_pay = 0;
}

elseif($hours <=40){
    $weekley_pay = $hours * $rate;
}

else{
    $weekley_pay = ($rate * 40) + (($hours - 40) * ($rate * 1.5));
}

 echo "you made \${$weekley_pay} this week";


 

?>
