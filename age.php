<?php
function checkAge($age) {
    if ($age > 18) {
        echo "The student is an adult.";
    } else {
        echo "The student is still a child.";
    }
}


checkAge(10);
?>

