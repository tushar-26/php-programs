<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body style="background-color: black; color: aliceblue">
    <form action="associative-html.php" method="post" class="form1">
        <div>
         <label>Enter Country :</label>
         <input type="text" name="country" placeholder="abcd">
        </div>
        <div>
         <label>Enter Capital :</label>
         <input type="text" name="capital" placeholder="abcd" style="margin-left: 5px;">
         <input type="submit">
        </div>
    </form>
    <style>
        .form1{
            display: grid;
            grid-template-rows: 1fr 1fr;
            row-gap: 10px;
        }
    </style>
</body>
</html>
 
<?php 
//12.1

$capitals = ["INDIA"=>"Delhi",
                  "USA"=>"Washington D.C",
                  "NEPAL"=>"Katmandu",
                  "JAPAN"=>"Kyoto",
                  "ISRAEL"=>"Tel Aviv",
                  "PAKISTAN"=>0]; 
 

$capital = $capitals[$_POST["country"]];
echo $capital;





?>