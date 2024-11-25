<?php 

setcookie("serial-killer","xyz", time() +(4000 * 34), "/");

foreach($_COOKIE as $key => $value){
    echo "$key and $value";
}

if(isset($_COOKIE["serial-killer"])){
    echo "kill {$_COOKIE["serial-killer"]}";
}else{
    echo "terminated";
}

?>