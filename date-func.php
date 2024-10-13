

 <?php 
 
 echo date("d-m-y h:i:s");     //1
  echo "<br>";

  print_r(getdate());        //2
  echo "<br>";

  echo (new DateTime())->setDate(2025, 12, 25)->format('Y-m-d');    //3
  echo "<br>";

 if(checkdate(10,13,2024)){     //4
    echo "yes";
 }else{
    echo "no";
 }
 echo"<br>";

 echo time(); //5
 echo"<br>";
 echo mktime(18,05,13,10,13,2024);  //6

 ?>