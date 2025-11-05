<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>

<body>
    <form action="loops.php">
        <label for="">Enter the Number to Increment:</label>
        <input type="text" name="counter">
        <input type="submit" value="Increment">
    </form>








</body>

</html>


<?php

$counter = $_GET["counter"] ?? 0;

for ($i = 0; $i <= $counter; $i++) {
    echo $i . "<br>";
}


$names = array('Shayan Shah', 'Haris Shah', 'Faisal Baseer');
$products = array('Apple', 'Banana', 'Mango');

foreach ($names as $name) {
    echo $name, '<br>';
}

foreach ($products as $product) {
    echo $product . "<br>";
}


?>