<?php 

$name = $_POST["name"];
$price = 652;
$qty = $_POST["quantity"];

$total = null;
$total = $price * $qty;

echo "$name <br>";
echo "$price <br>";
echo "$qty <br>";
echo "$total <br>";

echo "your stock name is {$name}. good  choice <br>";
echo "your stock price is {$price}. <br>";
echo "your shares quantity is {$qty}. <br>";
echo "</br>";
echo "total price of value is {$total}";


?>