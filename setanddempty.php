<?php
// Using the isset() and empty()

$username = 'null';

if (isset($username)) {
    echo "Vairable is Set" . '<br>';
} else {
    echo "Variable is not Set" . '<br>';
}


if (empty($username)) {

    echo "Vairable is Empty" . '<br>';
} else {
    echo "Vairable is not Empty" . '<br>';
}
