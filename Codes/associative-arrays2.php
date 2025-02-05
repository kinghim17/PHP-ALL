<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays Example</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Enter a country:</label>
        <input type="text" name="country">
        <input type="submit">
    </form>
    </body>
    </html>  
    <?php
        // Associative array = An array made of key => value pairs
        $capitals = array(
            "USA" => "Washington D.C.",
            "Japan" => "Kyoto",
            "South Korea" => "Seoul",
            "India" => "New Delhi"
        );

        $capitals = $capitals[$_POST['country']];
        echo $capitals;
    ?>

