<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
</head>

<body>

    <form action="order.php" method="post">

        <label for="">Quantity</label><br>
        <input type="text" name="Quantity"><br>
        <input type="submit" value="Total"> <br>



    </form>


</body>

</html>

<?php

$item = 'Pizza';
$price = 1500;
$total = null;

$quantity = $_POST["Quantity"];
$total = $price * $quantity;

echo "You have order:{$quantity} x {$item} <br>";
echo "Your total bill is:{$total} <br>";

// Associative array an array mede up of value key Pairs

$countries = array('Pakistan' => 'Islamabad', 'India' => 'New Delhi', 'Japan' => 'Seoul');

echo $countries['Pakistan'], '<br>';
// Using for Each

// Update using the Key Value Pair
$countries["Japan"] = "Lahore";

// add new key Value Pair
$countries["China"] = "Bejing";

// remove last element
array_pop($countries);

// remove first element
array_shift($countries);


// show only key Pairs
$keys = array_keys($countries);

// Accesing the Keys Value
foreach ($keys as $key) {
    echo $key . "<br>";
}

// Accesing the Value
$values = array_values($countries);

foreach ($values as $value) {
    echo "{$value} <br>";
}

// Flipping the Data 
$flips = array_flip($countries);

foreach ($flips as $key => $value) {
    echo "{$key} = {$value}" . "<br>";
}

// Amount of your Array
echo count($countries);


?>