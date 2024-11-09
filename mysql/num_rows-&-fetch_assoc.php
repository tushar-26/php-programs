<?php 

include("database2.php");

$sql = "SELECT * FROM user WHERE name='harsh'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0){
    $row = mysqli_fetch_assoc($result);
    echo $row["id"] . "<br>";
    echo $row["name"] . "<br>";
    echo $row["password"] . "<br>";
    echo $row["reg_date"] . "<br>";
}else{
    echo "no result";
}
mysqli_close($conn);
?>

<?php 
/*
include("database2.php");

$sql = "SELECT * FROM user";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) >0 ){
    while($row = mysqli_fetch_assoc($result)){
    echo $row["id"] . "<br>";
    echo $row["name"] . "<br>";
    echo $row["password"] . "<br>";
    echo $row["reg_date"] . "<br>";
    }
}else{
    echo "no result";
}

*/
?>