<?php

if (!isset($_SESSION)) {
    session_start();
}

$error = ''; // Variable To Store Error Message

$validBooking = true;

if (isset($_POST['submit'])) {

    $owner = $_SESSION['booking']['owner'];
    $campus = $_SESSION['booking']['campus'];
    $building = $_SESSION['booking']['building'];
    $room = $_SESSION['booking']['room'];
    $date = $_SESSION['booking']['date'];
    $startTime = $date . " " . $_SESSION['booking']['startTime'] . ":00";
    $endTime = $date . " " . $_SESSION['booking']['endTime'] . ":00";

    // echo $startTime."<br />".$endTime;
    // Establishing Connection with Server by passing server_name, user_id and password as a parameter
    // $connection = mysql_connect("localhost", "bookitbcit", "", "my_bookitbcit");
    $connection = mysql_connect("localhost", "bookitbcit", "", "my_bookitbcit");

    // Selecting Database
    $db = mysql_select_db("my_bookitbcit", $connection);


    $sql = "INSERT INTO booking (studentID, campusName, buildingCode, roomID, startTime, endTime) VALUES " .
            "('$owner', '$campus', '$building', '$room', '$startTime', '$endTime');";

    $retval = mysql_query($sql, $connection);

    if (!$retval) {
        die("Could not enter data" . mysql_error());
        mysql_close($connection);
    } else {
        //echo "Good to go.";
        unset($_SESSION['booking']);
        header("location: bookingSuccess.php"); // Redirecting To Other Page
        mysql_close($connection);
    }
}
?>
