<?php 
//24

// 1. Mysqli extension
// 2. PDO (PHP data object)


$db_server = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "bussinessdb";
$conn = "";


try{
$conn = mysqli_connect($db_server,
                     $db_user,
                     $db_password,
                     $db_name);
}
catch(mysqli_sql_exception){
    echo "u haven't started mysql yet from xampp panel";
}
if($conn){
    echo"succsessfully connected";
}else{
    echo "there was a any problem";
}



?>


<?php 

$db_server = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "Msystem";
$conn = "";
try{
$conn = mysqli_connect($db_server,
                        $db_user,
                        $db_password,
                        $db_name
);}

catch(mysqli_sql_exception){
    echo "please make sure that u have created a database to the xampp";
}

if($conn){
    echo "successfullly connected";
}else{
    echo "not connected";
}

?>