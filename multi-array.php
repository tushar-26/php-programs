<?php 

//^multidimentional array 1,2,3,4,5 etc.....verticals and horizontals

$list = array(
             array("tushar","savdiya","reader"),
             array("digvijay","parmar","hardworker"),
             array("rohit","raval","biker"),
             array("vrajesh","akheniya","mutthal"),
);

print_r($list);
echo "<br>";
var_dump($list);
echo "<br>";
echo "<br>";

for($i = 0; $i<4; $i++){

    for($x = 0; $x<3; $x++){
      echo $list [$i][$x];
      echo "<br>";
    }
}
foreach($list as $list1){
    echo "<br>";
    print_r($list1);
}

echo "<br>";
echo "<br>";

for($z = 0; $z<4; $z++){
    foreach($list[$z] as $data){
        echo $data;
        echo "<br>";
    }
}
echo "<br>";
echo "<br>";

print_r($list[0]);     //to view array
echo "<br>";
echo $list[0][2];       //to view perticular value in array


echo "<pre>";    // to view any array in reliable formate
foreach($list as $li){
    print_r($li[0]);
}

print_r($list);
?>


<?php
$student = array(
                 array("tushar","php",60),         //0
                 array("digvijay","C++",34),       //1  
                 array("rohit","java",51),         //2
                 array("vrajesh","python",01),     //3 
                );



echo "<pre>";

                
foreach($student as $st){

    print_r($st[1]);

}

print_r($student);die;       //! die means program RIP from this line



echo $student=[0][1];

/*for($x = 0; $x<4; $x++)                //we could use count function if data is in large quantity
{
    for($i = 0; $i<3; $i++)
    {
          echo $student[$x][$i];
          echo "<br>";
          
    }
}*/

/*for($x = 0; $x<4; $x++)
{
    foreach($student[$x] as $data)
    {
        echo $data;
        echo "<br>";
    }
}*/
  

?>