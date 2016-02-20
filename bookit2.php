<?php
include('session.php');
include('reservePageTwo.php');

require_once("dbController.php");

$campusName = "";

if (isset($_SESSION['booking'])) {
    $campusName = $_SESSION['booking']['campus'];
}

$db_handle = new DBController();
$query = "SELECT * FROM building INNER JOIN campus WHERE building.campusID = campus.campusID AND campus.campusName = '$campusName';";

$results = $db_handle->runQuery($query);
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Bookit@BCIT</title>
        <link rel="stylesheet" href="./css/foundation.css" />
        <link rel="stylesheet" href="./css/stylecopy.css" />
        <script src="./js/vendor/modernizr.js"></script><style>
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
            <form class="formInput" method="post" action="reservePageTwo.php">
                <p class="maptext">Which Building?</p>
                <p class="maptext">Campus Selected: <?php echo $campusName; ?></p>
                <div class="row">
                    <div class="large-12 columns">
                        <div class="row collapse">
                            <div class="small-20 columns">
                                <input id="owner" name="owner" class="logininputs" type="text" placeholder="Enter your BCIT ID" value="<?php echo $login_session_user; ?>">  
                            </div>
                            <select name="building" id="building" class="switch">
                                <?php foreach ($results as $building) { ?>
                                    <option value="<?php echo $building["buildingCode"] ?>"><?php echo $building["buildingCode"] ?></option>
                                <?php } ?>
                            </select>

                            <input id="bookingbut" name="submit" type="submit" value="Next Step">
                            <!--<span><php echo $error; ?></span>-->
                        </div> 
                    </div> 
                </div>
            </form>
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
