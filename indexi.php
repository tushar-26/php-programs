<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="indexi.php" method="post">
    <label>Username :</label></br>
    <input type="textbox" placeholder="Username" name="Username"><br>
    <label>Password :</label></br>
    <input type="Password" placeholder="Password" name="Password"><br>
    <input type="submit" value="log in">
    </form>
</body>
</html>
<?php 
 //4
 echo "your username is {$_POST["Username"]}";
 echo "</br>";
 echo $_POST["Password"];

?>

