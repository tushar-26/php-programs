<?php 
//& isset = returns true if a variable is declared and not null
//? empty = returns true if a variable is not declared, false or null ""


$name = "tushar";
                               //isset
echo isset($name);
echo "<br>";

if(isset($name)){
    echo "true bcz declared";
}
else{
    echo "falsenot declared";
}
echo "<br>";
echo "<br>";

$id = null;
                              //empty
echo empty($id);
echo "<br>";

if(empty($id)){
    echo "not declared";
}
else{
    echo "declared ";
}


?>