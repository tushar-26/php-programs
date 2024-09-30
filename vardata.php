<?php  
   //? 2 variable datatype
   
 $name="tushar savDiya";
  $food="Chole bhature";
  $email="tushar@gmail.com";

  $age=18;
  $users=2;
  $quantity=11;

  $price=500.78;
  $tax_rate=0.5;

  $employee=true;
  $online_status= true * 67;               //this is boolean datatype either true or false
   $for_sale = false;
  $total=null;


  echo "Hello{$name} </br>";
  echo "you like {$food} <br>";
  echo "your email is {$email}";
  echo "<br>";
  echo "my name is {$name} and my age is {$age} and my favorite food is {$food} </br>";

  echo "you are{$age} years old <br>";
  echo "there  are {$users} users online <br>";
  echo "quantity is maximum {$quantity}<br>";

  echo "total price is : \${$price} of ur product <br>";
  echo "you have pay {$tax_rate}% tax for ur order <br>";

  echo "online people {$online_status} <br>";

  echo "you have ordered {$quantity} x {$food} <br>";

    $total = $quantity * $price * $tax_rate;
  echo "your total is \${$total}";
?>