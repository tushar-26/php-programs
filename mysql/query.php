<?php 

include("database2.php");

$sql = "INSERT INTO user (name,password)
        VALUES ('socrates','550BCE')";
    mysqli_query($conn,$sql);

  
$update = "UPDATE user SET name='update', password='update12' WHERE id=45";
 mysqli_query($conn, $update);
  
$delete = "DELETE FROM user WHERE password='chut12'";
mysqli_query($conn, $delete);


$fetching = "SELECT * FROM user WHERE name='socrates'";
$result = mysqli_query($conn,$fetching);

  if(mysqli_num_rows($result)>0){
     while($row = mysqli_fetch_assoc($result)){
     echo $row["password"];
  }
}


  

  $update = "UPDATE user SET password='latest39' WHERE name='rurhruerh'";
  mysqli_query($conn,$update);

  mysqli_close($conn);
?>