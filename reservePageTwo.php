<?php

// Starting Session
if (!isset($_SESSION)) {
    session_start();
}
$error = ''; // Variable To Store Error Message
// $bookingParameters;

if (isset($_POST['submit'])) {

    $owner = $_POST['owner'];
    $buildingSelection = $_POST["building"];

    $owner = stripslashes($owner);
    $owner = mysql_real_escape_string($owner);

    $_SESSION['booking']['owner'] = $owner;
    $_SESSION['booking']['building'] = $buildingSelection;

    /* echo $_SESSION['booking']['campus'];
      echo $_SESSION['booking']['owner'].$_SESSION['booking']['building'];
      exit; */

    header("location: bookit3.php");
} else {
    //echo "Booking made already...";
}
?>