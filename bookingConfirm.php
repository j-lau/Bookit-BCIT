<?php
include('session.php');
include('reservePageThree.php');

require_once("dbController.php");

$bookingVariable = $_SESSION['booking'];
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Bookit@BCIT</title>
        <link rel="stylesheet" href="./css/foundation.css" />
        <link rel="stylesheet" href="./css/stylecopy.css" />
        <script src="./js/vendor/modernizr.js"></script>
        <style>
            body {
                background: #f0f0f0;
                background-size: cover;
            }

        </style>
    </head>
    <body >
        <div id="header">
            <div>
                <a href="./reminders.php"><img id="logotop" src="./images/logo.png" alt=""/></a>
            </div>
        </div>
        <div id="inputsform" class="fade-in one">

            <p class="maptext">Confirm Your Booking</p>
            <table>
                <tbody>
                    <tr><td>Student Number: </td><td><?php echo $bookingVariable['owner'] ?></td></tr>
                    <tr><td>Campus: </td><td><?php echo $bookingVariable['campus'] ?></td></tr>
                    <tr><td>Building: </td><td><?php echo $bookingVariable['building'] ?></td></tr>
                    <tr><td>Date: </td><td><?php echo $bookingVariable['date'] ?></td></tr>
                    <tr><td>Start Time: </td><td><?php echo $bookingVariable['startTime'] ?></td></tr>
                    <tr><td>End Time: </td><td><?php echo $bookingVariable['endTime'] ?></td></tr>
                    <tr><td>Duration: </td><td><?php echo $bookingVariable['duration'] ?></td></tr>
                </tbody>
            </table>

            <form method="post" action="reserveConfirm.php">
                <input id="bookingbut" name="submit" type="submit" value="Confirm Booking">
            </form>
            <a href="./reminders.php"><button id="bookingbut">Back to home</button></a>
        </div>

        <div class="bottom mybar icon-bar three-up">
            <a href="./reminders.php" class="item">
                <img src="images/grey-29.png" alt="">
                <label>Home</label>
            </a>
            <a href="./bookit.php" class="item">
                <img src="./images/Icons-22.png" alt="">
                <label2 class="blue">Bookit</label2>
            </a>
            <a href="./maps.php" class="item">
                <img src="./images/Icons-18.png" alt="">
                <label>Maps</label>
            </a>
        </div>
    </body>
</html>
