<?php 
//21.1
session_start();
?>
 
 <html>
    <head></head>
    <body style="background-color:gray;">
        <p style="color:black; font-size: 20px; font-family:cursive;">
            this will be our front-user(home) page which will be created by kirtan and darshita</p>
        <form action="session.php" method="post">
            <input type="submit" name="logout" value="logout" style="background-color:black; color:azure; padding: 5px; border: none;">
        </form>
            <!--<a href="session.php" target="_blank" style="font-size: 20px; color: aquamarine;
             position: absolute; left: 0; right: 0; bottom: 560px; margin-left: 20px;">
    it will take u back to login page
</a>-->

    </body>
 </html>

<?php 

echo '<p style="color: black; font-size: 20px; font-weight: bold; font-family: arial;">
Entered User name is : ' . $_SESSION["username"] . '</p>';

echo '<p style="color: black; font-size: 20px; font-weight: bold; font-family: arial;">
Entered Password is : ' . $_SESSION["password"] . '</p>';

if(isset($_POST["logout"])){
    session_destroy();
    header("Location: session.php");
}
?>