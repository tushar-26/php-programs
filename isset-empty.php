<?php 
//& isset = returns true if a variable is declared and not null
//? empty = returns true if a variable is not declared, false or null ""


$name = 5;
                               //isset
echo isset($name);
echo "<br>";

if(isset($name)){
    echo "true bcz declared";
}
else{
    echo "false not declared";
}
echo "<br>";
echo "<br>";

$id = 56;
                              //empty
echo empty($id);
echo "<br>";

if(empty($id)){
    echo "true bcz not declared";
}
else{
    echo "false bcz declared ";
}


?>