
<html>
    <body>
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
            <label>Username :</label>
            <input type="text" name="username" placeholder="user...">
            <input type="submit">
        </form>
    </body>
</html>

<?php 
//22
/*it contains headers, paths and script locations.
the entries in the array are created by web server.
shoe nearly everything you need to know about the current web page environment */

if($_SERVER["REQUEST_METHOD"] == "POST"){
echo "{$_POST["username"]} <br>";
}
 
foreach( $_SERVER as $key => $value){

    echo "$key = $value" . "<br>";
}

echo $_SERVER["SERVER_NAME"];
echo $_SERVER["SERVER_SOFTWARE"];

?>