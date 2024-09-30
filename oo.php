<!--<html>
<body>

   <form action="oo.php" method="post">
    <lable>Enter price :</lable>
    <input type="number" name="price" placeholder="price...">
    <lable>Enter fruit :</lable >
    <input type="text" name="fruit" placeholder="fruit...">
    <input type="submit" name="submit">
   </form>

</body>
</html>-->

<?php
/*

  $price = $_POST["price"];
  $fruit = $_POST["fruit"];


if(isset($_POST["submit"])){

if(empty($price) && empty($fruit)){
 
echo"both r empty";

}
elseif(isset($price)){

echo "entered price is $price";
}
elseif(empty($price)){

  echo"please enter price";
}
elseif(isset($fruit)){

echo "enteted fruit is $fruit";

}
elseif(empty($fruit)){

  echo"please enter fruit";

}

}*/

/*if(isset($_POST["submit"])){

    if(isset($_POST["price"])){
        echo "price is $price <br>";
    }
    elseif(empty($_POST["price"])){
        echo "enter price plz<br>";
    }
    if(isset($_POST["fruit"])){
        echo "fruit is $fruit";
    }
    elseif(empty($_POST["fruit"])){
        echo "enter fruit plz";
    }
}*/
?>

<html>
<body>

   <form action="oo.php" method="post">
    <label>Enter price :</label>
    <input type="number" name="price" placeholder="price...">
    <label>Enter fruit :</label>
    <input type="text" name="fruit" placeholder="fruit...">
    <input type="submit" name="submit">
   </form>

</body>
</html>

<?php
if (isset($_POST["submit"])) {
    $price = $_POST["price"];
    $fruit = $_POST["fruit"];

    // Check if both fields are empty
    if (empty($price) && empty($fruit)) {
        echo "Both price and fruit are empty.<br>";
    } else {
        // Check if price is empty
        if (empty($price)) {
            echo "Price is empty.<br>";
        } else {
            echo "Price is $price.<br>";
        }

        // Check if fruit is empty
        if (empty($fruit)) {
            echo "Fruit is empty.<br>";
        } else {
            echo "Fruit is $fruit.<br>";
        }
    }
}
?>

    

    
    
