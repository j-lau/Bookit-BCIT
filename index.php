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
        <p class="openingtext fade-in one">Introducing a new & innovative way to book a study room from the palm of your hand.</p>

        <div id="inputss">
            <form action="./login.php" method="post">
                <fieldset>
                    <input type="text" id="name" name="username" 
                           class="logininputs fade-in one" placeholder="Student ID" autofocus="autofocus" required="true" pattern="[a, A, 0-9]{9}" oninput="checkstuID(this);"/>
                    <input type="password" id="password" name="password" 
                           class="logininputs fade-in one" placeholder="Password" autofocus="autofocus" required="true" pattern="[a-z,A-Z, 0-9]{1,255}" oninput="checkpassword(this);"/>
                    <input type="submit" id="nextbut" name="submit" 
                           class="fade-in one" value="Login"/>
                </fieldset>
                <!--<span class="openingtext fade-in one"><php echo $error; ?></span>-->
            </form> 
        </div>

        <p class="intro2 fade-in one"><a class="link" href="./signup.php" >Don't have an account? Sign up</a></p>
    </body>

    <script>
        function checkstuID(input) {
            var submitButton = document.getElementById("submit");
            console.log("input: " + input);
            if (input.validity.patternMismatch) {
                input.setCustomValidity("Student ID is your A00 number");
            } else if (input.validity.valueMissing) {
                input.setCustomValidity("You must enter a Student ID!");
            } else {
                input.setCustomValidity("");
            }
        }

        function checkpassword(input) {
            if (input.validity.patternMismatch) {
                input.setCustomValidity("Password can only use characters letters and numbers");
            } else if (input.validity.valueMissing) {
                input.setCustomValidity("You must enter a password!");
            } else {
                input.setCustomValidity("");
            }
        }

    </script>

</html>
