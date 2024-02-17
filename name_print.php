<!DOCTYPE html>
<html>
<head>
    <title>Name Print</title>
</head>
<body>

    <h2>Name Printing Form</h2>

    <form method="post" action="">
        Enter your name: <input type="text" name="name">
        <br><br>
        How many times do you want your name printed? <input type="number" name="count" min="1">
        <br><br>
        <input type="submit" name="submit" value="Print">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect user input
        $name = $_POST['name'];
        $count = $_POST['count'];

        // Validate input
        if (empty($name) || empty($count) || !is_numeric($count) || $count <= 0) {
            echo "Please enter a valid name and a positive numeric count.";
        } else {
            // Print the name as many times as specified
            for ($i = 0; $i < $count; $i++) {
                echo $name . "<br>";
            }
        }
    }
    ?>

</body>
</html>
