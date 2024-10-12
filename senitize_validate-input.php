<html>
<body>
    <form action="senitize_validate-input.php" method="post">
    <lable>Username :</lable>
    <input type="text" name="name" placeholder="enter N.."><br>
    <lable>EMAIL :</lable>
    <input type="text" name="email" placeholder="enter E.."><br>
    <lable>Age :</lable>
    <input type="text" name="age" placeholder="enter A.."><br>
    <input type="submit" name="login" value="login">
    </form>
</body>
</html>


<?php 
//18              

if(isset($_POST["login"])){

    $username = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);

  // $username = $_POST["name"];
                                                                                 //it will convert value to given form
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

    $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);

    echo "hello $username your email is $email and your age is $age";

}

if(isset($_POST["login"])){ 
                                                                     //if any inconsistancies then it will not return value
    $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);

    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

    if(empty($age)){
        echo "it is aint valid or empty <br>";
    }else{
        echo "your age is $age <br>";
    }
    if(empty($email)){
        echo "email is aint valid or empty <br>";
    }else{
        echo $email; 
          
          
    }
}

?>