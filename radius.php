<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: 'Courier New', Courier, monospace;
        }
        body:hover{
        color: aqua;
    
      }
    </style>
</head>
<body style="background-color: grey; color: white;">
    <form action="radius.php" method="post">
    <label> Radius :</label>
    <input type="text" placeholder="enter" name="radius">
    <input type="submit" value="calculate" style="background-color: pink; color: black; font-weight: bold; padding: 7px; border: none; display: block; margin-top: 10px;">
    </form>
</body>
</html>

<?php 
//5.1

$radius = $_POST["radius"];
$cicuference = null;
$area = null;
$volume = null;

$cicuference = 2 * pi() * $radius;
$cicuference = round($cicuference, 2);

$area = pi() * pow($radius, 2);
$area = round($area, 2);

$volume = 4/3 * pi() * pow($radius, 3);
$volume = round($volume, 2);

echo "circuference = {$cicuference}cm <br>";
echo "area = {$area}cm^2 <br>";
echo "volume is = {$volume}cm^3";

?> 



