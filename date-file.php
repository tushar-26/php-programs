<?php

echo date("d-m-y=h:m:i");
echo date('l, F j, Y');
$date1 = getdate();
print_r($date1);

checkdate(2020,10,11);
if(checkdate(2020,10,11)){
    echo "trye";
}
else{
    echo "f";
}
echo time();
echo "<br>";

?>

<?php 

 $file = fopen('data.txt','r');
 print_r($file);

 $f = fread('$file','10');
 print_r($f);
 


?>