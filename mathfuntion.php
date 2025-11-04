<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Function</title>
</head>

<body>

    <form action="mathfuntion.php" method="post">
        <label for="">x</label>
        <input type="text" name="x">
        <label for="">y</label>
        <input type="text" name="y">

        <label for="">z</label>
        <input type="text" name="z">

        <input type="submit" value="total">
    </form>


</body>

</html>


<?php

$x = $_POST["x"];
$y = $_POST["y"];
$z = $_POST["z"];
$total = null;


// Abs func
// $total = abs($x);

// Round func
// $total = round($x);

// Cel Func
// $total = ceil($x);

// Max
// $total = max($x, $y, $z);

// Sqrt func
// $total = sqrt($x);

$total = rand(1, 6);
echo $total;




?>