<?php

// Starting Session
if (!isset($_SESSION)) {
    session_start();
}

$error = ''; // Variable To Store Error Message

$bookingParameters;

if (isset($_POST['submit'])) {
    $campusSelection = $_POST["campus"];
    $bookingParameters = array("campus" => "$campusSelection");

    echo $bookingParameters["campus"];

    $_SESSION['booking'] = $bookingParameters;
    header("location: bookit2.php"); // Redirecting To Other Page 
} else {
    //echo "Booking made already...";
}
?>