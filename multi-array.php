<?php

//^multidimentional array 1,2,3,4,5 etc.....  multi verticals and horizontals


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