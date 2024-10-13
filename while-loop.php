<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="while-loop.php" mehtod="post">
        <input type="submit" value="stop" name="stop">
    </form>
</body>
</html>


<?php 
//10

//^ while : do some code infinitely while some condition remains true

/*$counter = 0;
while($counter <= 199){
    $counter++;
    echo "iloveu <br>";
}*/

/*$second = 0;
$running = true;

while($running == true){
    if(isset($_POST["stop"])){
        $running = false;
    }
    else{
     //wait 1 sec
     $second++;
     echo $second ."<br>";
    }
}*/

/*$t = 6;
do{
    echo "hey";
}while($t == 6);
*/

$name = "kks";
while($name == "tushar1" || $name == "kk"){
    echo "ilove";
}

?>