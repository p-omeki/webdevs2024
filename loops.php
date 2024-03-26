<!DOCTYPE html>
<html>

<head>
    <title>LOOPS FORM</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <form method="POST" action="">
        <div class="">
        <Label for="start">Starting number: </Label>
        <input type="text" class="" name="start" id="start"><br><br>
        </div>
        <label for="end">Ending number: </label>
        <input type="text" name="end" id="end"><br><br>

        <input type="submit" name="submit" value="Print Range"><br><br>


        <?php
        if (isset($_POST['submit'])) {
            $start = $_POST['start'];
            $end = $_POST['end'];

            for ($i = $start; $i <= $end; $i++) {
                echo "$i <br><br>";
            }
            if ($start > $end) {
                for ($i = $start; $i >= $end; $i--) {
                    echo "$i <br><br>";
                }
            } 
        }
        ?>
    </form>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>