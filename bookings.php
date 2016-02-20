<?php
include('session.php');

require_once("dbController.php");

$db_handle = new DBController();

$user = $_SESSION['login_user'];
$query = "SELECT * FROM booking WHERE studentID = '$user';";

$results = $db_handle->runQuery($query);
?>
<!doctype html>
<html lang="en">
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
    <body>
        <div id="header">
            <div>
                <a href="./reminders.php"><img id="logotop" src="./images/logo.png" alt=""/></a>
            </div>
        </div>
        <img  class="glasses fade-in one" src="./css/tumblr_static_tumblr_static__640.jpg" alt="">
        <p class="profiletextsmall2 fade-in one">Your bookings</p>
        <div id="inputsform" class="fade-in one">
            <?php
            if ($results == 0) {
                echo "<div id='inputss' class='fade-in one'>" .
                "<p class='maptext'>You have no bookings.</p>" .
                "</div>";
            } else {
                foreach ($results as $booking) {
                    ?>
                    <table>
                        <tbody>
                            <tr><td>Campus: </td><td><?php echo $booking['campusName']; ?></td></tr>
                            <tr><td>Building: </td><td><?php echo $booking['buildingCode']; ?></td></tr>
                            <tr><td>Room Number: </td><td><?php echo $booking['roomID']; ?></td></tr>
                            <tr><td>Date: </td><td><?php echo date("l F d, Y", strtotime($booking['startTime'])); ?></td></tr>
                            <tr><td>Start: </td><td><?php echo date("g:i A", strtotime($booking['startTime'])); ?></td></tr>
                            <tr><td>End: </td><td><?php echo date("g:i A", strtotime($booking['endTime'])); ?></td></tr>
                        </tbody>
                    </table>
                    <?php
                }
            }
            ?>
            <a href="./reminders.php"><button id="bookingbut">Back to home</button></a>
        </div>

        <div class="bottom mybar icon-bar three-up">
            <a href="./reminders.php" class="item">
                <img src="images/Homeblue-28.png" alt="">
                <label2 class="blue">Home</label2>
            </a>
            <a href="./bookit.php" class="item">
                <img src="./images/Icons-19.png" alt="">
                <label>Bookit</label>
            </a>
            <a href="./maps.php" class="item">
                <img src="./images/Icons-18.png" alt="">
                <label>Maps</label>
            </a>
        </div>
    </body>
</html>