    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sanatize</title>
    </head>

    <body>
        <form action="sanatize.php" method="post">
            <input type="text" name="username"><br>
            <input type="text" name="password"><br>
            <input type="email" name="email"><br>
            <input type="submit" value="Login" name="login">

        </form>
    </body>

    </html>



    <?php


    if (isset($_POST['login'])) {

        // username
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
        if (empty($_POST['username'])) {
            echo "Please enter the Username <br>";
        } else {
            echo "Welcome {$username} <br>";
        }

        // passsword
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_NUMBER_INT);

        if (empty($_POST['password'])) {
            echo "Please enter the Password <br>";
        } else {
            echo 'your password is:' . $password . '<br>';
        }
        // email
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        if (empty($_POST['email'])) {
            echo "Please enter the Email <br>";
        } else {
            echo "Your Email Adress is: $email";
        }
    }

    ?>