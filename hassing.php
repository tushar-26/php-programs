<?php
//23
/* hashing = transforming sensitive data (password)
  into letter, numbers, and/or symbols 
  via mathematical process. (similar to encryption)
  it hides the original data from 3rd parties
*/

$password = "doraemon";

$hash = password_hash($password, PASSWORD_DEFAULT);

if(password_verify("lookism", $hash)){
    echo "welcome plx";
}else{
    echo "incorrect pswrd";
}

echo "<br><br>" . $hash;


?>