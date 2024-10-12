


<?php 
 
//21

//session = to store information on a user to be used across multiple pages
// a user is assigned a seesion id ex.login credentials 

session_start();

?>

<html>
    <head></head>
    <body style="background-color: gray; border: solid 30px black; margin: 0 0 0 0; box-shadow:inset 0 0 40px;">
        <form style="border: solid black 20px; height: 400px; width: 500px; margin: 0px auto; margin-top: 70px;
         box-shadow: inset 0 0 30px;" action="session.php" method="post">
            <h2 style="text-align:center;"> tushar's Login Page</h2>
            <input type="text" name="name" placeholder="username" style="margin-left: 60px; margin-bottom: 10px;">
            <input type="password" name="pswrd" placeholder="password" style="margin-left: 60px;">
            <input type="submit" value="LOGIN" name="login"style="display:block; margin-left: 115px; margin-top: 15px;">
        </form>
    
         
        <?php 

        if(isset($_POST["login"])){

     $_SESSION["username"] = $_POST["name"];
     $_SESSION["password"] = $_POST["pswrd"];

        if(empty($_SESSION["username"]) && empty($_SESSION["password"])){
            echo '<p style="color: black; font-size: 20px; font-weight: bold; font-family: arial; margin-left: 40px;">
            Username and Password are Empty 🥺</p>';

        }else{

        if(empty($_SESSION["username"])){

            echo '<p style="color: black; font-size: 20px; font-weight: bold; font-family: arial; margin-left: 40px;">
            please enter Username 👤</p>';

        }else{
    
            echo '<p style="color: black; font-size: 20px; font-weight: bold; font-family: arial; margin-left: 40px;">
            user-name is ' . $_SESSION["username"]  . '</p>';

        }

        if(empty($_SESSION["password"])){
    
           echo '<p style="color: black; font-size: 20px; font-weight: bold; font-family: arial; margin-left: 40px;">
            please enter password 🔑</p>';


        }else{
            echo '<p style="color: black; font-size: 20px; font-weight: bold; font-family: arial; margin-left: 40px;">
            password is ' . $_SESSION["password"] . '</p>';
        }
        if(!empty($_SESSION["username"]) && !empty($_SESSION["password"])){

            header("Location: sess.php");
        }
         
    } 
}
          echo '<p style="color: black; font-size: 20px; font-weight: bold; font-family: arial; margin-left: 40px;">' .
    $_SERVER["SERVER_SOFTWARE"] . '</p>';  //just for testing

        ?>
    </body>
</html>


