<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>username:</label><br>
        <input type="text" name="username"><br>
        <label>password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>

<?php
    foreach($_POST as $key => $value){
        echo $key . " : " . $value . "<br>";
    }
    if(isset($_POST['login'])){
       echo"yes we got the login request<br>";
       $username = $_POST['username'];
       $password = $_POST['password'];
       if(empty($username)){
           echo "username is empty";
       }else{
              echo "hello {$username}";
       }
    }
?>




<?php
// isset()= returns TRUE if the variable is set and not NULL
       // empty()= returns TRUE if the variable is empty
 $username= "brocode";
 echo isset($username);// 1 means true 
//uou can use isset in the if else block

?>
