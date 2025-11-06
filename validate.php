    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Validate</title>
    </head>

    <body>
        <form action="validate.php" method="post">
            <input type="text" name="age"><br>
            <input type="text" name="email"><br>
            <input type="submit" value="Login" name="submit">

        </form>
    </body>

    </html>



    <?php


    if (isset($_POST['submit'])) {


        // age
        $age = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);

        if (empty($_POST['age'])) {
            echo "Please enter your age <br>";
        } else {
            echo 'you are :' . $age . 'Year old <br>';
        }
        // email
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        if (empty($_POST['email'])) {
            echo "Please enter the Valid Email <br>";
        } else {
            echo "Your Email Adress is: $email";
        }
    }

    ?>