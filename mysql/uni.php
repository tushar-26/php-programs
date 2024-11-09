<?php 

include("database2.php");

$insert = "INSERT INTO user (name,password) VALUES
 ('veer','veer01')";

 mysqli_query($conn,$insert);

 mysqli_close($conn);

 $update = "UPDATE SET user name='vveer',password='fheihqeoih' WHERE id='81'";
 mysqli_query($conn,$update);

 $delete = "DELETE FROM user WHERE name='veer'";
 mysqli_query($conn,$delete);

 $fetching = "SELECT * FROM user WHERE name='veer'";

 $result = mysqli_query($conn,$fetching);

 if(!result){
    die("there was a any error occured" . mysqli_error($conn));
    $row = mysqli_fetch_assoc($result);
    $row["id"] . "<br>";

 }

 $arr = mysqli_fetch_array($result);
    echo $arr["id"];

    $obj = mysqli_fetch_object($result);
    echo "password is :" . $obj->password . "<br>";

?>