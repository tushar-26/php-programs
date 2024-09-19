<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>isset-empty</title>
</head>
<body>
    <form action="is-em.php" method="POST">
     <lable>USERNAME:</lable>
     <input type="text" name="username" placeholder="user..."></br>
     <lable>PASSWORD:</lable>
     <input type="password" name="password" placeholder="123456" style="margin-top: 4px;"></br>
     <input type="SUBMIT" name="login" value="LOGIN" style="margin-top: 5px;">
    </form>
</body>
</html>

<?php 


if(isset($_POST["login"])){

    $name = $_POST["username"];
    $pswrd = $_POST["password"];

    
    if(empty($name) && (empty($pswrd))){
        echo "username and username is missing";
    }
    elseif(empty($name)){
        echo "username is missing";
    }
    elseif(empty($pswrd)){
        echo "password is missing";
    }
    else{
        echo "hello $name your password is *****";
    }
    
    
}

/*foreach($_POST as $key => $value){
    echo "$key = $value <br>";
}*/

?>