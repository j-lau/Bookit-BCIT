<?php
include('session.php');
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
        <p class="profiletextsmall2 fade-in one">Welcome back, <?php echo $login_session; ?>.</p>

        <div id="inputss" class="fade-in one">
            <a href="./bookings.php"><button id="nextbut2">View your bookings</button></a>
            <a href="./bookit.php"><button id="nextbut2">Book a study room</button></a>
            <a href="./logout.php"><button id="outlinebut">Logout</button></a>
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