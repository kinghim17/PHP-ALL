<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        username:<br>
        <input type="text" name="username"><br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>

<?php
  if(isset($_POST['login'])){
      $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);// if using get INPUT_GET
      echo "Welcome $username";
  }
//  you can similarly use if-else block to check if the username is empty or not 

// similary you can use FILTER age, email 
?>
