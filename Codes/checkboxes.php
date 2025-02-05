<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="checkbox" name="pizza" value="Pizza">Pizza<br>
        <input type="checkbox" name="burger" value="burer">burger<br>
        <input type="checkbox" name="Hotdog" value="Hotdog">Hotdog<br>
        <input type="checkbox" name="taco" value="taco">taco<br>
        <input type="submit" name="submit">
    </form>
</body>
</html>
<?php
   if(isset($_POST["submit"])){
        if(isset($_POST["pizza"])){
            echo "you like pizza <br>";
        }
        // check similarly for the other keys
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="checkbox" name="foods[]" value="Pizza">Pizza<br>
        <input type="checkbox" name="foods[]" value="burer">burger<br>
        <input type="checkbox" name="foods[]" value="Hotdog">Hotdog<br>
        <input type="checkbox" name="foods[]" value="taco">taco<br>
        <input type="submit" name="submit">
    </form>
</body>
</html>
<?php
   if(isset($_POST["submit"])){
        $foods = $_POST["foods"];
        foreach($foods as $food){
            echo "$food <br>";
        }
    }
       
   ?>

