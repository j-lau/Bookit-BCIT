<?php
include('session.php');
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>

    <body class="backg">
        <div id="header">
            <div>
                <a href="./reminders.php"><img id="logotop" src="./images/logo.png" alt=""/></a>
            </div>
        </div>
        <section class="search fade-in one">
            <div class="row">
                <div class="small-12 large-10 columns small-centered">
                    <form class="custom">
                        <div class="row">
                            <div class="large-3 small-12 columns">
                                <p class="maptext">View the BCIT study rooms on campus</p>
                                <select class="switch">
                                    <option class="switch" value="Bby SE14 Library 1st floor">Bby SE14 Library 1st floor</option>
                                    <option class="switch" value="Bby SE14 Library 2nd floor">Bby SE14 Library 2nd floor</option>
                                    <option class="switch" value="Bby SE14 Library 3rd floor">Bby SE14 Library 3rd floor</option>
                                    <option class="switch" value="Bby SW1 1st floor">Bby SW1 1st floor</option>
                                    <option class="switch" value="Bby SW1 2nd floor">Bby SW1 2nd floor</option>
                                    <option class="switch" value="Bby SE2 3rd floor">Bby SE2 3rd floor</option>
                                    <option class="switch" value="ATC Library">ATC Library</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <div class="BbySE14Library1stfloor box fade-in one">
            <img class="popup" src="./images/BbySE14Library1stfloor.png" alt=""/>
        </div>
        <div class="BbySE14Library2ndfloor box fade-in one">
            <img src="./images/BbySE14Library2ndfloor.png" alt=""/>
        </div>
        <div class="BbySE14Library3rdfloor box fade-in one">
            <img src="./images/BbySE14Library3rdfloor.png" alt=""/>
        </div>
        <div class="BbySW11stfloor box fade-in one">
            <img src="./images/BbySW11stfloor.png" alt=""/>
        </div>
        <div class="BbySW12ndfloor box fade-in one">
            <img src="./images/BbySW12ndfloor.png" alt=""/>
        </div>
        <div class="BbySE23rdfloor box fade-in one">
            <img src="./images/BbySE23rdfloor.png" alt=""/>
        </div>
        <div class="ATCLibrary box fade-in one">
            <img src="./images/ATCLibrary.png" alt=""/>
        </div>

        <div class="bottom mybar icon-bar three-up">
            <a href="./reminders.php" class="item">
                <img src="images/grey-29.png" alt="">
                <label>Home</label>
            </a>
            <a href="./bookit.php" class="item">
                <img src="./images/Icons-19.png" alt="">
                <label>Bookit</label>
            </a>
            <a href="./maps.php" class="item">
                <img src="./images/Icons-23.png" alt="">
                <label2 class="blue">Maps</label2>
            </a>
        </div>
    </body>

    <script>
        $(document).ready(function () {
            $("select").change(function () {
                $("select option:selected").each(function () {
                    if ($(this).attr("value") == "Bby SE14 Library 1st floor") {
                        $(".box").hide();
                        $(".BbySE14Library1stfloor").show();
                    }
                    if ($(this).attr("value") == "Bby SE14 Library 2nd floor") {
                        $(".box").hide();
                        $(".BbySE14Library2ndfloor").show();
                    }
                    if ($(this).attr("value") == "Bby SE14 Library 3rd floor") {
                        $(".box").hide();
                        $(".BbySE14Library3rdfloor").show();
                    }
                    if ($(this).attr("value") == "Bby SW1 1st floor") {
                        $(".box").hide();
                        $(".BbySW11stfloor").show();
                    }
                    if ($(this).attr("value") == "Bby SW1 2nd floor") {
                        $(".box").hide();
                        $(".BbySW12ndfloor").show();
                    }
                    if ($(this).attr("value") == "Bby SE2 3rd floor") {
                        $(".box").hide();
                        $(".BbySE23rdfloor").show();
                    }
                    if ($(this).attr("value") == "ATC Library") {
                        $(".box").hide();
                        $(".ATCLibrary").show();
                    }
                });
            }).change();
        });
    </script>
</html>
