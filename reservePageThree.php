<?php

if (!isset($_SESSION)) {
    session_start();
}
$error = ''; // Variable To Store Error Message

$validBooking = true;

if (isset($_POST['submit'])) {

    $room = $_POST['room'];

    $date = $_POST['datepicker'];

    $campus = $_SESSION['booking']['campus'];
    $building = $_SESSION['booking']['building'];

    $startTime = $_POST['startTime'];
    $duration = $_POST['duration'];

    $bookingStart = $startTime;
    $time = new DateTime($bookingStart);

    $bookingStartTime = $time->format('H:i');
    $time->add(new DateInterval('PT' . $duration . 'M'));
    $bookingEndTime = $time->format('H:i');

    // Establishing Connection with Server by passing server_name, user_id and password as a parameter
    // $connection = mysql_connect("localhost", "bookitbcit", "", "my_bookitbcit");
    $connection = mysql_connect("localhost", "bookitbcit", "", "my_bookitbcit");

    // Selecting Database
    $db = mysql_select_db("my_bookitbcit", $connection);

    $startDateTime = $date . " " . $bookingStartTime . ":00";
    $endDateTime = $date . " " . $bookingEndTime . ":00";

    $sql = "SELECT * FROM booking WHERE "
            . "campusID = '$campus' AND "
            . "buildingID = '$building' AND "
            . "roomID = '$room' AND "
            . "'$endDateTime' > startTime AND "
            . "endTime > '$startDateTime';";

    $query = mysql_query($sql, $connection);
    $rows = mysql_num_rows($query);

    if ($rows > 0) {
        $validBooking = false;
        echo "Overlapping booking.";
    }

    if ($validBooking) {
        // Good to Go!
        $_SESSION['booking']['room'] = $room;
        $_SESSION['booking']['date'] = $date;
        $_SESSION['booking']['startTime'] = $bookingStartTime;
        $_SESSION['booking']['endTime'] = $bookingEndTime;
        $_SESSION['booking']['duration'] = $duration;
        header("location: bookingConfirm.php");
    } else {
        header("location: bookit3.php");
    }
} else {
    //echo "Booking made already...";
}
?>