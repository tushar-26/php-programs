<html>
  <head>
    <link href="associative-html.php">
  </head>
</html>
<?php 


/* associative array is an array made of key => value pairs

  for ex= coutries => capitals
          student => id */

     $capitals = ["INDIA"=>"Delhi",
                  "USA"=>"Washington D.C",
                  "NEPAL"=>"Katmandu",
                  "JAPAN"=>"Kyoto",
                  "ISRAEL"=>"Tel Aviv",
                  "PAKISTAN"=>0]; 

   echo $capitals["JAPAN"];
   echo "<br>";
   $capitals ["USA"] = "Ohio"; //to change value
   $capitals ["CHINA"] = "Biejing"; //adds new array

   //array_pop($capitals); //removing last
   //array_shift($capitals); //removing first
   echo count($capitals);
   echo "<br>";
   //$capitals = array_reverse($capitals);
   $keys = array_keys($capitals);  //to view only keys
   $values = array_values($capitals);   //to view only values
    $flipping = array_flip($capitals);

   foreach($capitals as $key => $value){

    echo "country is key 👉|$key| and its pair is capital👉 |$value| <br>";
   }

   foreach($keys as $key){
    echo "{$key} <br>";
  }
  echo "<br>";
   foreach($values as $value){
    echo "{$value} <br>";
  }
  echo "<br>";
  foreach($flipping as $key => $value){
    echo "{$key} and {$value} after flip 💱<br>";
  }


?>