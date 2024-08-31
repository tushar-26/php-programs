<!DOCTYPE html>
<html>
  <head></head>
  <body>
    <style>
      body{
        background-color: black;
        color: white;
        transition: opacity, font-size 0.14s;
      }
      body:hover{
        color: aqua;
        cursor :crosshair;
      }
      body:active{

        opacity: 0.3;
        font-size: 49px;
      }
      
    </style>
  </body>
</html>

<?php
  // arithmetic operators
  // + - * / ** %

  $x = 20;
  $y = 2;
  $z = null;

  //$z = $x + $y;
  //$z = $x - $y;
  //$z = $x * $y;
  //$z = $x / $y;
  $z = $x ** $y;
  //$z = $x % $y;
  echo "$z</br>";

  echo $x + $y; 

  echo "</br>";

  //increment/decrement operator

  $counter = 10;
  

  $counter-= 11;

  $age = 18;
  $age--;

  echo "$counter <br>";
  echo "$age <br>";

  //operator precedence

  // first priority     ()
  // seconnd priority   **
  // third priority     * / %
  // fourth priority     + -

  $total = 1 + 2 - 3 * 4 / 5 ** 6;

  echo "total is = {$total}";
  echo "</br>";

  $king = (1-2)**56/445+34-45%475*3;
  echo "$king <br>";

  $precedence = 34* 23 - 21 + 6857 / 35 ** 447;
  echo ":= $precedence";

?>



