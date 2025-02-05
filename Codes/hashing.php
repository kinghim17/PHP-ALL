<?php
 // hashing = transforming sensitive data(password) into letters
 // numberrs and/or symbols via a mathematical process.
 // hides the original data from the third parties
 $password = "pizza123";
 $hash = password_hash($password,PASSWORD_DEFAULT);// decrypt algorthm
 echo $hash . "<br>";

 if(password_verify("pizza123",$hash)){
     echo "password is valid";
 }else{
     echo "password is invalid";
 }
 ?>
