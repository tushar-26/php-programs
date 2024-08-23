<?php 
 
 $item = "Pizza";
 $price = 5.99;
 $alltaxes = 0.56;
 $Qty = $_GET["Qty"];
 $total = null;

 $total = $price * $Qty * $alltaxes;

 echo "you have ordered {$Qty} x {$item}s </br>";
 echo "your total is: \${$total} <br>";
 echo $item;
 


 
 
 
 
 

?>