<?php 

$e = array("tusshar","savdiya",19);


print_r($e);

count($e);

list($string,$string,$integer) = $e;
echo $integer;

if(in_array('4',$e)){
echo "'4'found";
}else{
    echo "nothing";
}
echo current($e);
echo next($e);


$q = array(1,2,3,4,5);
$z = array(6,7,8,9,10);
$merge = array_merge($q,$z);
print_r($merge);

$reverse = array_reverse($q);
print_r($reverse);

array_pop($z);
print_r($z);
array_shift($z);
print_r($z);

var_dump($q);
array_push($q,11,12,13);
print_r($q);
?>