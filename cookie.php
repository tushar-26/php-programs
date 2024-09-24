<?php 

/*setcookie("username", "tushar", time() + 3600);

if(isset($_COOKIE["username"])){
    echo $_COOKIE["username"];
}*/

session_start();

$_SESSION["username"] = "tush";
$_SESSION["pass"] = "1234";

echo $_SESSION["username"] = "tush";
echo $_SESSION["pass"] = "1234";

?>
<html>
    <body>
        <a href="s.php">click</a>
    </body>
</html>