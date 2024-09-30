<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main</title>
</head>
<body>
    <div class="container">
        <form action="page1.php" method="post" class="form1">
        <div>
        <p class="name">enter name :</p>
        <input type="text" placeholder="name" name="name" class="box">
        </div>
        <div>
       <p class="qty">enter quantity :</p>
       <input type="text" placeholder="qty" name="quantity" class="box">
        </div>
        <input type="submit" value="Click" class="click">
        <div class="point">time</div>
        </form>
    </div>

    <style>

        body{
            background: linear-gradient(to right, lightblue, lightpink);
            background: linear-gradient(to left, lightcyan, orange);
            
        }
        .click{
            padding: 5px;
            position: absolute;
            bottom: 15px;
            left: 170px;
            

        }
        .form1{
        display: flex;
        column-gap: 10px;
        }
        body{
            height: 2000px;
        }
        *{
            margin: 0;
            padding: 0;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        }
        .container{
            
            position: relative;
            margin: 20px 20px;
            display: grid;
            grid-template-columns: 150px 150px;
            padding: 20px 30px 20px 50px;
        
            width: 300px;
            height: 300px;
            border: solid;
            border-width: 1px;
            border-color: red;
            border-radius: 5px;
            
            
            
        }
        .box{
            
            margin-top: 15px;
            width: 130px;
            height: 200px;
            padding-left: 5px;
            
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            border: solid;
            border-width: 2px;
            border-color: blue;
            box-shadow: blue 0px 0px 1px;
            transition: padding 0.15s;
        }
        .box:hover:active{
         padding: 40px;
        }
        .name,.qty{
            padding-left: 20px;
        }
        .name{
            
            padding-left: 30px;
            
        }
        .point{
            position: absolute;
            bottom: 0px;
            right: 0px
        }
        .container:hover{
            cursor: pointer;
        box-shadow: cyan 2px 2px 100px;
            
        }

    </style>
</body>
</html>


<?php 
//4.2

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