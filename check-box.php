<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkbox</title>
</head>
<body style="
            background:linear-gradient(to left, lightpink, lightblue);
            color:darkblue;
            font-style:oblique;
            font-weight:900;
            padding: 30px;
            font-size: 30px;
">
   <form action="check-box.php" method="post">
    <input type="checkbox" name="pizza" value="Pizza">Pizza</br>
    <input type="checkbox" name="burger" value="Burger">Burger</br>
    <input type="checkbox" name="hotdog" value="HotDog">Hotdog</br>
    <input type="checkbox" name="noodels" value="Noodels">Noodels</br>
    <input type="submit" value="done it" name="submit">
</form>
</body>
</html>-->

<?php
/*
if(isset($_POST["submit"])){ 

    if(isset($_POST["pizza"])){
        echo "you like pizza! 🍕<br>";
    }                                       //it's nested if used to execute second coniditon instantly after first condition.(to-gether)
    if(isset($_POST["burger"])){
        echo "you like burger! 🍔<br>";
    }
    if(isset($_POST["hotdog"])){
        echo "you like hotdog! 🌭<br>";
    }
    if(isset($_POST["noodels"])){
        echo "you like noodels! 🍝<br>";
    }
    if(empty($_POST["pizza"])){
        echo "you dont like pizza! 🍕☹️";
    }
    if(empty($_POST["burger"])){
        echo "you dont like burger! 🍔☹️";
    }
    if(empty($_POST["hotdog"])){
        echo "you dont like hotdog! 🌭☹️";
    }
    if(empty($_POST["noodels"])){
        echo "you dont like noodels! 🍝☹️";
    }
    
}
*/
?>
 
 <html>
<head>
    <title>checkbox</title>
</head>
<body style="
            background:linear-gradient(to left, lightpink, lightblue);
            color:darkblue;
            font-style:oblique;
            font-weight:900;
            padding: 30px;
            font-size: 30px;
">
   <form action="check-box.php" method="post">
    <input type="checkbox" name="foods[]" value="Pizza">Pizza</br>
    <input type="checkbox" name="foods[]" value="Burger">Burger</br>
    <input type="checkbox" name="foods[]" value="HotDog">Hotdog</br>
    <input type="checkbox" name="foods[]" value="Noodels">Noodels</br>
    <input type="submit" value="done it" name="submit">
</form>
</body>
</html>

<?php
                                       //~working with array
if(isset($_POST["submit"])){ 

   // Check if the 'foods' array is set
   if(isset($_POST["foods"]) && !empty($_POST["foods"])) {
       $foods = $_POST["foods"];
   
       foreach($foods as $food){
           echo $food . "<br>"; // Add a line break for better readability
       }
   }
    else {
       echo "No food selected.";
   }
}

?>


<?php
/*
if(isset($_POST["submit"])){ 

   $foods = $_POST["foods"];
   
   foreach($foods as $food){
    echo $food;
   }
}
*/
?>