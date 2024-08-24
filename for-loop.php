<?php 
//!repeat some code a certain ammount of times

/*for($i = 10; $i > 0; $i--){
    echo $i ."@ ". "hey";
}

for($i = 0; $i <= 100; $i +=2){
    //echo "number" ." ". $i;
    echo "number {$i} <br>";
     //echo"😂";
}*/

 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="for-loop.php" method="post">
    <p>Enter a number count up:</p>
    <input type="text" name="countup" placeholder="number">
    <p>Enter a number count down:</p>
    <input type="text" name="countdown" placeholder="number">
    <input type="submit" value="start">
    </form>
</body>
</html>

<?php 

$countup = $_POST["countup"];
$countdown = $_POST["countdown"];

  /*for($i = 1; $i <= $countup; $i++){
    echo"<br>";
    echo $i ." "."no";
  }*/
   
  for($i = $countdowm; $i >= 0; $i--){
   
    echo $i . "<br>";
  }

?>