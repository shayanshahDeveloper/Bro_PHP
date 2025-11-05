<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raduis</title>
</head>

<body>
    <form action="raduis.php" method="post">
        <label>Raduis</label>
        <input type="text" name="Raduis">
        <input type="submit" value="Calculate">
    </form>
</body>

</html>


<?php

$raduis = $_POST['Raduis'];
$total = null;
$circumfrence = null;
$area = null;




$total = $raduis * 2;
$circumfrence = 2 * pi() * $raduis;
$circumfrence = round($circumfrence, 2);

// Area

$area = pi() * pow($raduis, 2);
$area = round($area, 2);

echo "The Cirumfreence is: $circumfrence <br>  ";
echo "The area is:$area";



?>