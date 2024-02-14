<?php
function getDoctorLocation($day) {
    switch($day) {
        case "Monday":
            return "Nairobi";
        case "Tuesday":
            return "Nakuru";
        case "Wednesday":
            return "Kericho";
        case "Thursday":
            return "Kisumu";
        case "Friday":
            return "Narok";
        default:
            return "The doctor does not visit any hospital today.";
    }
}

if(isset($_GET['day'])) {
    echo getDoctorLocation($_GET['day']);
}
?>
