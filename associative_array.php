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

<?php 

$hobby = ["tushar"=>"chess",
          "harsh"=>"cricket",
          "krn"=>"archery",
          "vik"=>"m-bation",
          "digvijay"=>"driving"];

echo $hobby["tushar"];

$karn = $hobby["krn"];

echo "$karn <br>";

$hobby["dada"] = "drink"; //add new 
$hobby["vik"] = "no"; //value  change

print_r($hobby); //human readeble
echo "<br>";
/*var_dump($hobby); // information about variable*/

echo count($hobby);

array_pop($hobby); //last remove
array_shift($hobby); //first remove
print_r($hobby);

echo "<br>";
$hobby1 = array_reverse($hobby); //reverse array
print_r($hobby1);


echo "<br>";
print_r (array_keys($hobby));
echo "<br>";
print_r (array_values($hobby));
echo "<br>";
print_r(array_flip($hobby));


echo "<br>";
foreach($hobby as $key => $value){
    echo "names are {$key} and hobbies are {$value} <br>";
}

?>