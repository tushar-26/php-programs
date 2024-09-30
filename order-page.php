
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>order-page</title>
</head>
<body>
    <form action="order-page.php" method="get">
        <label>Quantity : </label></br>
        <input type="text" name="Qty" placeholder="Enter Qty"></br>
        <input type="submit" value="total">
    
    </form>
</body>
</html>

<?php 
//4.1
 
 $item = "Pizza";
 $price = 5.99;
 $alltaxes = 0.56;
 $Qty = $_GET["Qty"];
 $total = null;

 $total = $price * $Qty * $alltaxes;

 echo "you have ordered {$Qty} x {$item}s </br>";
 echo "your total is: \${$total} <br>";
 echo $item;

 echo $_GET["Qty"];

?>