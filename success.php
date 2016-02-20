<?php
include('login.php'); // Includes Login Script

if (isset($_SESSION['login_user'])) {
    header("location: reminders.php");
}
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Bookit@BCIT</title>
        <link rel="stylesheet" href="./css/foundation.css" />
        <link rel="stylesheet" type="text/css" href="./css/stylecopy.css"/>
        <script src="./js/vendor/modernizr.js"></script>

    </head>
    <body>
        <img class="logoMAIN fade-in one" src="./images/logo.png" alt=""/>

        <div id="inputsbooking" class="fade-in one">
            <img class="check" src="./images/booked-25.png" alt="">
            <p class="openingtext fade-in one">Your account has been created.</p>
        </div>

        <div id="inputss">
            <form action="./index.php" method="post">
                <input type="submit" id="nextbut" name="submit" class="fade-in one" value="Back to Login"/>
            </form> 
        </div>
    </body>
</html>
