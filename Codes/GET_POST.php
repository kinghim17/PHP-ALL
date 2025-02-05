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
        <input type="submit" value="login">
    </form>
</body>
</html>

<?php
// $_GET, $_POST = special variables used to collect data from an HTML form
// data is sent to the file in the action attribute of <form>
// <form action="some_file.php" method="get">

// $_GET = Data is appended to the URL
//         NOT SECURE
//         char limit
//         Bookmark is possible with values
//         GET requests can be cached
//         Better for a search page

// $_POST = Data is packaged inside the body of the HTTP request
//          MORE SECURE
//          No data limit
//          Cannot bookmark
//          GET requests are not cached
//          Better for submitting credentials

//GET operational
//one way of doing it
    echo $_GET['username'] . "<br>";//it acts an array
    echo $_GET['password'];
    echo "{$_GET['username']} <br>";   
    echo "{$_GET['password']} <br>";  
//POST
    echo "{$_POST['username']} <br>";   
    echo "{$_POST['password']} <br>"; 

    // Similarly you can store the values in variables and do whatever

?>
