<?php 

function names($name,$age){
    echo "hey $name <br>";
    echo "age is $age <br>";
}
names("tushar",19);
names("serial-killer",34);


function even($no){

    $result = $no % 2;
    return $result;

}
echo even(9);

echo "<br>";

function add($a,$b){
     $c = $a + $b;
    return $c;
}
 echo add(5,5);

 if(add(2,2) <=4 && add(2,3) == 5){
    echo "yes";
 }else{
    echo "no";
 }





 
?>