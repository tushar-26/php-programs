<?php 

include("database2.php");

$insert = "INSERT INTO user (name,password)
           VALUES ('lautzu','lau333')";
       mysqli_query($conn,$insert);

$update = "UPDATE user SET name='laugreat',password='lau3331' WHERE id=71";
       mysqli_query($conn,$update);

$delete = "DELETE from user WHERE password='2323w1q'";
       mysqli_query($conn,$delete);

$fetching = "SELECT * FROM user WHERE name='laugreat'";

      $result = mysqli_query($conn,$fetching);

    if(!$result){
        echo "query failed" . mysqli_error($conn);
    }else{

        if(mysqli_num_rows($result) >0 ){
            $row = mysqli_fetch_assoc($result);
            echo $row["id"] . "<br>";
            echo $row["password"] . "<br>";
        }
    }

    $$row = mysqli_fetch_array($result);
echo $row["id"] . "<br>";


while ($obj = mysqli_fetch_object($result)) {
    // Access data as an object
    echo "Username: " . $obj->id . "<br>";
}

mysqli_close($conn);



?>