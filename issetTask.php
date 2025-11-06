<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form action="issetTask.php" method="post">
        <label for="">Username</label>
        <input type="text" placeholder="Enter your username" name="username"><br>
        <label for="">password</label>
        <input type="password" name="password" placeholder="Enter your Password"><br>
        <input type="submit" name="login" value="Submit">


    </form>
</body>

</html>


<?php

$username = $_POST['username'];
$password = $_POST['password'];

/*if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    if (empty($username)) {
        echo "Username is missing";
    } else {
        echo "Weclome {$username}";
    }

    if (empty($password)) {
        echo 'Password is missing';
    }
}*/

foreach ($_POST as $key => $value) {
    echo "$key =$value" . "<br>";
}





?>