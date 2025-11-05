<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="associativeArray.php" method="post">
        <label for="">Enter the Country</label><br>
        <input type="text" name="country">
        <input type="submit">
    </form>
</body>

</html>


<?php
$countries = array('Pakistan' => 'Islamabad', 'India' => 'New Delhi', 'Japan' => 'Seoul');

$country = $countries[$_POST['country']];
echo $country;

?>