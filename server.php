<?php 

/*foreach($_SERVER as $key => $value){
    echo "$key = $value <br>";
}*/

echo $_SERVER['REQUEST_METHOD'];
echo "<br>";
echo $_SERVER["REQUEST_TIME"];


echo "<br>";



?>

<html>
<body>
    
<form action="server.php" method="post">

<lable>enter name</lable>
<input type="text" name="username">
<input type="submit">
</form>
</body>

</html>

<?php 

$c = $_REQUEST["username"];
echo $c;

?>