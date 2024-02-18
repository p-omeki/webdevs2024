<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <title>Lesson One</title>
</head>
<body>
    <h1>Calculation of X and Y</h1>
    <p>My first PHP page.</p>
    <?php
    // This is a single-line comment and my first PHP script
    # This is also a single-line comment and am so excited to learn PHP
    $X = 12;
    $Y = 23;

    #Computation section
    $sum = $X + $Y;
    $difference = $X - $Y;
    $product = $X * $Y;
    $division = $X / $Y;
    $modulus = $X % $Y;

    echo "The sum of $X and $Y is $sum <br>";
    echo "The difference between $X and $Y is $difference <br>";
    echo "The product of $X and $Y is $product <br>";
    echo "The division of $X and $Y is $division <br>";
    echo "The modulus of $X and $Y is $modulus <br>";

        echo "Hello World!";
    ?>
    //The values of the variables, X and Y should come from a form
</body>
</html>
```