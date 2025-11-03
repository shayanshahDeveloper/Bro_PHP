
    <?php

    // Strings
    $name = 'Shayan Shah';
    $email = 'test@gmail.com';
    $city = 'Kohat';
    $food = "Pizza";


    // Number
    $age = 23;
    $number = 00000;
    $quantity = 20;


    // Float
    $gpa = 2.8;
    $price = 20.10;

    // Boolean
    $is_Active = true;
    $is_Dead = false;


    $total = null;

    // String Output
    echo "My name is {$name} <br>";
    echo "Your email is {$email}<br>";
    echo "Your email is {$city}<br>";

    // Number Output
    echo "Im {$age} year old <br> ";
    echo "My number is: {$number} <br> ";

    // Float Output
    echo "My gpa is:{$gpa} <br> ";
    echo "The Product Price is:{$price}<br>";


    // Boolean Output
    echo "There are {$is_Active} user Active <br> ";
    echo "There are {$is_Dead} user <br> ";


    // Multiple
    echo "Your Ordered {$quantity} x {$food}<br>";
    $total = $quantity * $price;
    echo "Your Total Price is {$total}";

    ?>