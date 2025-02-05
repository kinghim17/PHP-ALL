<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>x:</label><br>
        <input type="text" name="x"><br>
        <input type="submit" value="Total"><br>
    </form> <br>
</body>
</html>
<?php
    $x = $_POST['x'];
    $Total= abs($x); // 
    echo "Total is {$Total}";
    // similarly round, floor, ceil ,pow , sqrt , max , min , rand, pi()
?>