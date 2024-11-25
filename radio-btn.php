<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>radio-btn</title>
    <link rel="icon" href="tushar.png">
    <style>
        body{
        background: linear-gradient(to right, pink, skyblue);
        box-shadow: inset blue  0px 0px 30px;
        display: inline-block;
        padding: 150px;
        margin-left: 500px;
        margin-top: 100px;
        font-family: cursive;
        font-weight: bold;
        font-size: 20px;
        transition: box-shadow 0.50s;
        }
        body:hover{
            box-shadow: inset blue 0px 0px 70px; 
        }
               
    </style>
</head>
<body>
    <form action="radio-btn.php" method="post">
        <input type="radio" name="debit-credit" value="RUPAY"> RUPAY</br>
        <input type="radio" name="debit-credit" value="VISA"> VISA</br>
        <input type="radio" name="debit-credit" value="MASTER CARD"> MASTER CARD</br>
        <input type="radio" name="debit-credit" value="CASH">CASH 💵</br>
        <input type="SUBMIT" name="confirm" value="CONFIRM" style="
        background-color: gray; color:white; 
        font-family:cursive; border: solid 7px black; 
        padding: 5px 10px 5px 10px; margin: 15px 0px 0px 0px;">
    </form>
</body>
</html>

<?php 
//14

if(isset($_POST["confirm"])){
  $debit_credit = null;                            // just for avoiding variable declaration error

if(isset($_POST["debit-credit"])){
  $debit_credit = $_POST["debit-credit"];
}
if($debit_credit == "RUPAY"){
    echo "YOU SELECTED RUPAY";
}
elseif($debit_credit == "VISA"){
    echo "YOU SELECTED VISA";
}
elseif($debit_credit == "MASTER CARD"){
    echo "YOU SELECTED MASTER CARD";
}
elseif($debit_credit == "CASH"){
    echo "YOU SELECTED CASH 💵";
}
else{
    echo "please select one of them";
}
}

?>
