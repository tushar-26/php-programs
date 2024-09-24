<?php 

$a = 4;
$b = 4;

function add(){
    $GLOBALS["c"] = $GLOBALS["a"] + $GLOBALS["b"];
}
add();
echo $c;


?>