<?php
function getDoctorLocation($day)
{
    if ($day == "Monday") {
        return "Nairobi";
    } else if ($day == "Tuesday") {
        return "Nakuru";
    } else if ($day == "Wednesday") {
        return "Kericho";
    } else if ($day == "Thursday") {
        return "Kisumu";
    } else if ($day == "Friday") {
        return "Narok";
    } else if ($day == "Saturday" || $day == "Sunday") {
        return "The doctor is off duty at Home.";
    } else {
        return "The doctor is admitted in hospital.";
    }
}

if (isset($_GET['day'])) {
    echo getDoctorLocation($_GET['day']);
}
?>
```