<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background: linear-gradient(to right, black, blue); padding: 300px ; color:aliceblue">
    <form action="isset-empty-html.php" method="post" style=" height: 200px; width: 300px; display: flex; flex-direction: column; justify-content:center; align-items: center; background: linear-gradient(to right, rgb(60, 157, 157), rgb(70, 121, 168)); box-shadow: inset red 0 0 50px;">
      <label>Username :</label>
      <input type="text" name="name" placeholder="enter">
      <label>Password :</label>
      <input type="text" name="password" placeholder="enter">
      <input type="submit" name="login" value="log in">
    </form>
</body>
</html>

<?php 

foreach($_POST as $key => $value){
    echo "$key = $value <br>";
}

?>