<html>
  <head>
    <title>Funny-Logic</title>
    <link rel="stylesheet" href="logical1.css">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/4138/4138870.png">
  </head>
    <body>
        <form action="logical1.php" method="post" class="form1">
            <div class="picbox">
                <img class="pic"src="https://cdn-icons-png.flaticon.com/512/4138/4138870.png">
            </div>
            <div class="textbox">
                <lable>Enter Book :</lable>
                 <input type="text" name="book" class="input1" placeholder="book"
                <lable>Enter Price :</lable>
                 <input type="text" name="price" class="input1" placeholder="price"
            
</form>
            <input type="submit" style="background-color: black; color:aliceblue;">
</div>
    </body>
  
</html>






<?php 

//7.1

$book = $_POST["book"];
$price = $_POST["price"];

echo "this is about book. <br> book name is {$book}. price is {$price} <br>";
echo "<br>";

if($price == 406){
    echo"you can purchase {$book} book😊";
}
elseif($price == 350 || $price == 405){
    echo"just earn more money😀";
}
elseif($price >=150 && $price <=349){
    echo"u dont have enough money🥲";
}
elseif($price >406){
    echo"you can easily purchase this {$book} book😎";
}
elseif($price >=10 && $price <=149){
    echo"idiot earn first then come😂";
}

?>