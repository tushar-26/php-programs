<select>

    <?php
       
         for($i=0;$i<=30;$i++){
                  echo "<option>" .$i ."</option>";
            }


      ?>

</select>
       </br>

<?php

$marks = 80;

         if($marks>=80){
                  echo "A+";
         }elseif($marks<80 && $marks >=70){
                  echo "A";
         }elseif($marks<70 && $marks >=60){
                  echo "B";
         }elseif($marks<60 && $marks >=50){
                  echo "C";
         }else{
         echo "fail";

}

for ($i=0;$i<100;$i++){
       echo "<br>";
       if($i%2==0){
              echo "EVEN : ".$i;
       }else{
              echo "ODD : ".$i;
       }
}

?>



                                                                                                                                                  