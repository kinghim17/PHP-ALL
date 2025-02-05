<?php
//  $_SERVER contains headers,paths and script locations.
//  the enetries in this array are created by the web server.
//  shows nearly everything you need to know about the current web page env
 foreach($_SERVER as $key => $value){
     echo $key . " " . $value . "<br>";
 }
 ?>
