<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Selection</title>
</head>

<body>
    <form action="radio.php" method="post">
        <input type="radio" name="payment" value="visa"> Visa <br>
        <input type="radio" name="payment" value="credit"> Credit Card <br>
        <input type="radio" name="payment" value="master"> Master Card <br>
        <input type="radio" name="payment" value="amex"> American Express <br>

        <input type="submit" name="confirm" value="Confirm">
    </form>
</body>

</html>

<?php
if (isset($_POST['confirm'])) {
    if (isset($_POST['payment'])) {
        $payment = $_POST['payment'];
        echo "You selected: " . htmlspecialchars($payment);
    } else {
        echo "Please select a payment method.";
    }
}
?>