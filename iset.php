<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Is set</title>
</head>

<body>
    <form action="iset.php" method="post">
        <input type="radio" name="credit_card" value="Visa">Visa <br>
        <input type="radio" name="credit_card" value="Master Card">Master Card <br>
        <input type="radio" name="credit_card" value="Debit Card">Debit Card<br>
        <input type="radio" name="credit_card" value="Union Pay">Union Pay <br>
        <input type="submit" value="Confirm" name="confirm">
    </form>
</body>

</html>


<?php


if (isset($_POST['confirm'])) {
    if (isset($_POST['credit_card'])) {
        $credit_card = $_POST['credit_card'];
        echo "You selected {$credit_card}";
    }else{
        echo 'Please Slect the Payment Card';
    }


    
}




?>