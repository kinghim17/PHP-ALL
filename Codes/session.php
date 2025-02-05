<?php
// session_start();
?>
 
<?php
 //sessions are used to store information on a user to
 //used acrosss multiple pages. A user  is assigned to a
 //session-id ex: login credentials

 // create two pages index and home and add link
  $_SESSION['username'] = "JohnDoe";
  echo $_SESSION['username'];

//the project has two parts how to have session and stuff in it (interesting part check it out)
?>
