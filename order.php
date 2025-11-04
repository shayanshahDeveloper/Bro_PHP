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
echo "Your total bill is:{$total}";

?>