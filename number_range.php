<!DOCTYPE html>
<html>
<head>
    <title>Number Range Print</title>
</head>
<body>

    <h2>Number Range Printing</h2>

    <form method="post" action="">
        Enter starting number: <input type="number" name="start">
        <br><br>
        Enter ending number: <input type="number" name="end">
        <br><br>
        <input type="submit" name="submit" value="Print Range">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect user input
        $start = $_POST['start'];
        $end = $_POST['end'];

        // Validate input
        if (!is_numeric($start) || !is_numeric($end)) {
            echo "Please enter valid numeric values for both start and end.";
        } else {
            // Print numbers based on the conditions
            if ($start < $end) {
                // Print in ascending order
                for ($i = $start; $i <= $end; $i++) {
                    echo $i . "<br>";
                }
            } elseif ($start > $end) {
                // Print in descending order
                for ($i = $start; $i >= $end; $i--) {
                    echo $i . "<br>";
                }
            } else {
                // If start and end are equal, print just that number
                echo $start;
            }
        }
    }
    ?>

</body>
</html>
