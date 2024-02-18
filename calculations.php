<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    switch($operation) {
        case 'add':
            $result = $num1 + $num2;
            echo "The sum of $num1 and $num2 is: " . $result . "<br>";
            break;
        case 'subtract':
            $result = $num1 - $num2;
            echo "The difference between Num1 and Num2 is: " . $result . "<br>";
            break;
        case 'multiply':
            $result = $num1 * $num2;
            echo "The product of Num1 and Num2 is: " . $result . "<br>";
            break;
        case 'divide':
            $result = $num1 / $num2;
            echo "The division of Num1 by Num2 is: " . $result . "<br>";
            break;
        case 'modulus':
            $result = $num1 % $num2;
            echo "The modulus of Num1 and Num2 is: " . $result . "<br>";
            break;
        default:
            echo "Invalid operation selected.";
            break;
    }
}
