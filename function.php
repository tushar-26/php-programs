<html>
    <head>
        <title>welcome</title>
    </head>
    <body style="background-color: black;
                 color:aliceblue">
    <form action="function.php" method="get">
        <label>X :</label>
        <input type="text" placeholder="Enter" name="valuex"><br>
        <label>Y :</label>
        <input type="text" placeholder="Enter" name="valuey"><br>
        <label>Z :</label>
        <input type="text" placeholder="Enter" name="valuez"><br>
        <input type="submit" value="click">
    </form>
   

<?php 

    $x = $_GET["valuex"];
    $y = $_GET["valuey"];
    $z = $_GET["valuez"];
    echo $x;
echo "<br>";
    $total = null;
   //$total = abs($x);           //negetive to positive
   //$total = round($x);         //normal roundoff
   //$total = floor($x);         //rounddown
   //$total = ceil($x);          //roundup
   //$total = pow($x, $y);        //works like exponent **
   //$total = sqrt($x);                //square off
   //$total = max($x, $y, $z);          //maximum value
   //$total = min($x, $y, $z);        //minimum value
   //$total = pi();
   $total = rand(90, 100);    //minimum and maximum

     echo $total; 

?>
 </body>
 </html>