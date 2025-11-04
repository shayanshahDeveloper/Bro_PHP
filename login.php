<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <form action="login.php" method="post">

        <label for="username">username</label><br>
        <input type="text" placeholder="Enter your username" name="username"><br>

        <label for="password">password</label><br>
        <input type="password" name="password">
        <input type="submit" value="Login">
    </form>

</body>

</html>


<?php

// echo "{$_POST["username"]}<br>";
// echo "{$_POST["password"]}";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"] ?? '';
    $password = $_POST["password"] ?? '';

    echo "<p>Username: {$username}</p> <br>";
    echo "<p>Password: {$password}</p>";
}


?>