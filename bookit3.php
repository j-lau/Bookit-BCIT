<?php
include('session.php');
include('reservePageThree.php');

require_once("dbController.php");

$building = "";

if (isset($_SESSION['booking'])) {
    $building = $_SESSION['booking']['building'];
}

$db_handle = new DBController();
$query = "SELECT * FROM roomlocation WHERE building_no = '$building';";

$results = $db_handle->runQuery($query);
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Bookit@BCIT</title>
        <script src="./js/vendor/modernizr.js"></script>

        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

        <link rel="stylesheet" href="./css/foundation.css" type="text/css"/>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="css/foundation.css" type="text/css"/>
        <link rel="stylesheet" href="css/stylecopy.css" type="text/css"/>
        <link rel="stylesheet" href="css/normalize.css" type="text/css"/>
        <link rel="stylesheet" href="css/datepicker.css" type="text/css"/>
        <style>
            body {
                background: #f0f0f0;
                background-size: cover;
            }

        </style>
        <script>
            $(function () {
                $("#datepicker").datepicker({
                    dateFormat: 'yy-mm-dd',
                    minDate: 0
                });
            });
        </script>
    </head>
    <body >
        <div id="header">
            <div>
                <a href="./reminders.php"><img id="logotop" src="./images/logo.png" alt=""/></a>
            </div>
        </div>
        <div id="inputsform" class="fade-in one">
            <form class="formInput" method="post" action="reservePageThree.php">
                <p class="maptext">Which room?</p>
                <div class="row">
                    <div class="large-12 columns">
                        <div class="row collapse">
                            <select name="room" id="room" class="switch">
                                <?php foreach ($results as $room) { ?>
                                    <option value="<?php echo $room["room_no"] ?>"><?php echo $room["room_no"] ?></option>
                                <?php } ?>
                            </select>
                            
                            <p class="maptext">What day?</p>
                            
                            <div class="large-12 columns">
                                <input type="text" id="datepicker" class="logininputs" name="datepicker" value="Pick a Date"/>
                            </div>
                            
                            <select name="startTime" id="startTime" class="switch">
                                <?php
                                for ($hours = 0; $hours < 24; $hours++) {// the interval for hours is '1'
                                    for ($mins = 0; $mins < 60; $mins+=30) {// the interval for mins is '30'
                                        echo '<option value="' . str_pad($hours, 2, '0', STR_PAD_LEFT) . ':' . str_pad($mins, 2, '0', STR_PAD_LEFT) . '">';
                                        echo str_pad($hours, 2, '0', STR_PAD_LEFT) . ':' . str_pad($mins, 2, '0', STR_PAD_LEFT);
                                        echo '</option>';
                                    }
                                }
                                ?>
                            </select>
                            
                            <select name="duration" id="duration" class="switch">
                                <option value="30">30 minutes</option>
                                <option value="60">1 hour</option>
                                <option value="90">1 hour 30 minutes</option>
                                <option value="120">2 hours</option>
                            </select>

                            <input id="bookingbut" name="submit" type="submit" value="Next Step">
                            <!--<span><php echo $error; ?></span>-->
                        </div> 
                    </div> 
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
