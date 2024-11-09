<?php 

require("database2.php");

$fetching = "SELECT * FROM user WHERE name='tushar'";

$result = mysqli_query($conn,$fetching);

if(!$result){
    die("query failed: " . mysqli_error($conn));
}

$row = mysqli_fetch_array($result);
echo $row["id"] . "<br>";


while ($obj = mysqli_fetch_object($result)) {
    // Access data as an object
    echo "Username: " . $obj->id . "<br>";
}




mysqli_close($conn);


?>