<?php 
/* switches = replacement to using many elseif statements
more efficiant less code to write*/

$grade = "A";

switch($grade){
    case "A":
    echo "u did great";
    break;
    case "B":
    echo "u did good";
    break;
    case "C":
     echo "u did ok";
    break;
    case "D":
    echo "u r fail";
    break;
    default:
    echo "{$grade} is not valid";
    break;
    
}
echo "<br>";
//!------------------------------------

$date = date("l");

$date = "Monday";

switch($date){
    case "Monday":
        echo "i like monday";
        break;
    case "tuesday":
        echo "i like tuesday too";
        break;
    case "wednesday":
        echo "hmm wednesday is okay !";
         break;
    case "Thursday":
         echo "thursday is very well";
        break;
    case "Friday":
        echo "Friday is awesome";
        break;
    case "Saturday":
        echo "Day of Deity";
        break;
    case "Sunday":
        echo "Sunday is king of days 😎";
        break;
    default:
        echo "{$date} is invalid";
}

?>