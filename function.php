


<?php /*
//16

//^    function: write some code once, reuse when you need it
//^    type() after funciton name to invoke
//^    ex. add(), subtract(), multiplay(), divide()

function my_weaknesses($name, $age){                                   //*parameters
    echo "{$name}'s masterbation age is $age <br>";
    echo "{$name}'s negative thinking age is {$age}<br>";
    echo "{$name}'s unknown fear age is {$age}<br>";
    echo "{$name}'s these are my core weaknesses age is {$age}<br>";
}

my_weaknesses("tushar", 19);           //*arguments
my_weaknesses("harsh", 19);
my_weaknesses("king", 45);

function is_even($number){
 $result = $number % 2;
 return $result;
}
echo is_even(10);

function add($a, $b){
  $c = $a + $b;
  return $c;
}
 echo add(45,53); 
 echo add(4,3);

 echo "<br>";
 function add2($a){
 $a += 10;
 return $a;
 }
 $num = 5;
 echo add2($num);
 
 echo "<br>";


 function hypotenues ($x, $y){

     $z = sqrt($x ** 2 + $y ** 2);
     return $z;

 }
 echo hypotenues(4,7); 
 echo "<br>";

 function mult($q, $w){

echo $q * $w;

 }
 mult(2,2);
 */

 function add($a, $b){

 echo $a + $b;

 }
  
 if(add(2,4) <=6 || add(2,4)>=100){

echo "its true";
 }else{

echo "its aint true";
 }


 switch(add(4,5)){

  case 9:
       echo"correct value";
    break;
  case 10:
       echo"value is 10";
    break;
  case 4:
       echo"its 4";
    break;
  case 19:
       echo"its 19";
     break;
  case 56:
       echo"its 56";
     break;
  default:
    echo"404";
    break;

 }


 ?>
 