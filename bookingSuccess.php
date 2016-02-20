<?php
include('session.php');

if (isset($_SESSION['booking'])) {
    echo "Booking variable still alive. Need to kill it somehow.";
}
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
        <div id="fb-root"></div>
        <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
        <div id="header">
            <div>
                <a href="./reminders.php"><img id="logotop" src="./images/logo.png" alt=""/></a>
            </div>
        </div>
        <div id="inputsform" class="fade-in one">
            <img class="check" src="./images/booked-25.png" alt="">
            <p class="profiletextsmall3 fade-in one">Your study room has been booked</p>

            <!--<a href=""><button id="bookingbut">Share on Facebook</button></a>-->
            <div class="fb-share-button" data-href="http://bookitbcit.altervista.org/" data-layout="button"></div>
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
