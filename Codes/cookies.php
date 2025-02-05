
<?php
 // cookie= information about a user stored in a user's web browser
 // targeted ads, browsing preferneces and non- sensitive data 
 setcookie("fav_food","pizza",time() + (86400*2),"/");
 setcookie("fav_drink","coffee",time() -0 ,"/");// - to delete 
 foreach($_COOKIE as $key => $value){
     echo $key . " " . $value . "<br>";
 }
if(isset($_COOKIE["fav_food"])){
    echo "your fav food is " . $_COOKIE["fav_food"];
}else{
    echo "cookie not set";
}
?>