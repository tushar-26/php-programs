<?php 
//20

/*cookie = information about a user stored in a user's web browser targeted advertisments, 
browsing preference, and other non-sensitive data F12 -> applications to view cookies */


setcookie("fav_movie", "RAAZ", time() + (86400 * 365), "/");
setcookie("fav_event", "music-event", time() + (86400 * 365), "/");
setcookie("fav_food", "popcorn", time() + (18000 * 365),  "/");



foreach($_COOKIE as $key => $value){
    echo "$key = $value <br>";
}
echo "<br>";
// added
if(!empty($_COOKIE["fav_movie"])){

    echo "purchase ticket of your favorite movie :{$_COOKIE["fav_movie"]} !! <br>";
}
else{
    echo"movie cookie not fetched <br>";
}
//
if(isset($_COOKIE["fav_event"]) && (!empty($_COOKIE["fav_event"]))){
    echo "purchase ticket of your favorite event {$_COOKIE["fav_event"]} <br>";
}
else{
    echo "event cookie not fetched<br>";
}
//
if(isset($_COOKIE["fav_food"]) && (!empty($_COOKIE["fav_food"]))){
    echo "make purchase for your favorite food while watching movie {$_COOKIE["fav_food"]} <br>";
}
else{
    echo "food cookie not fetched<br>";
}
?>