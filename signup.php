<?php
include('register.php'); // Includes Register Script

if (isset($_SESSION['login_user'])) {
    header("location: profile.php");
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

    </head>
    <body>
        <img class="logoMAIN fade-in one" src="./images/logo.png" alt=""/>
        <p class="infotext fade-in one">Please fill out the information below</p>

        <div id="inputss" class="fade-in one">
            <form action="./register.php" id="submitForm" name="signup" method="post">
                <fieldset>
                    <input id="stdId" name="stdId" type="text" class="logininputs" placeholder="Student ID" autofocus="autofocus" required="true" pattern="[a, A, 0-9]{9}" oninput="checkstuID(this);" />
                    <input id="firstName" name="firstName" type="text" class="logininputs" placeholder="First Name" autofocus="autofocus" required="true" pattern="[a-z, A-Z]{1,50}" oninput="checkfirstname(this);" />
                    <input id="lastName" name="lastName" type="text" class="logininputs" placeholder="Last Name" autofocus="autofocus" required="true" pattern="[a-z, A-Z]{1,50}" oninput="checklastname(this);" />
                    <input id="password" name="password" type="password" class="logininputs" placeholder="Password" autofocus="autofocus" required="true" pattern="[a-z, A-Z, 0-9]{4,20}" oninput="checkpassword(this);" />
                    <input id="password2" name="password2" type="password" class="logininputs" placeholder="Re-enter Password" autofocus="autofocus" required="true" pattern="[a-z, A-Z, 0-9]{4,20}" oninput="checkpassword(this);" />
                    <input id="email" name="email" type="text" class="logininputs" placeholder="Email" autofocus="autofocus" required="true" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" />
                    <input id="number" name="number" type="text" class="logininputs" placeholder="Phone number" autofocus="autofocus" required="true" pattern="[0-9]{10}" oninput="checkphonenumber(this);" />
                    <input id="nextbut" name="nextbut" type="submit" value="Sign Up" />
                    <!--<span><php echo $error; ?></span>-->
                </fieldset>
                <!--<span><php echo $error; ?></span>-->
            </form>
        </div>
        <p class="intro fade-in one"><a class="link" href="./index.php" >Already have an account? Login</a></p>
    </body>

    <script>

        function checkfullname(input) {
            var submitButton = document.getElementById("nextbut");
            console.log("input: " + input);
            if (input.validity.patternMismatch) {
                input.setCustomValidity("Name can only contain a-z or A-Z");
            } else if (input.validity.valueMissing) {
                input.setCustomValidity("You must enter a name!");
            } else {
                input.setCustomValidity("");
            }
        }

        function checkstuID(input) {
            var submitButton = document.getElementById("nextbut");
            console.log("input: " + input);
            if (input.validity.patternMismatch) {
                input.setCustomValidity("Student ID is your A00 number");
            } else if (input.validity.valueMissing) {
                input.setCustomValidity("You must enter a Student ID!");
            } else {
                input.setCustomValidity("");
            }
        }

        function checkphonenumber(input) {
            var submitButton = document.getElementById("nextbut");
            console.log("input: " + input);
            if (input.validity.patternMismatch) {
                input.setCustomValidity("Phone number must be 10 numerical digits long");
            } else if (input.validity.valueMissing) {
                input.setCustomValidity("You must enter a phone number!");
            } else {
                input.setCustomValidity("");
            }
        }

        /*function checkpassword(input) {

            if (input.validity.patternMismatch) {
                input.setCustomValidity("Password must be longer than 4 characters");
            } else if (input.validity.valueMissing) {
                input.setCustomValidity("You must enter a password!");
            } else {
                input.setCustomValidity("");
            }
        }

        function pvalidate(input) {
            if (document.signup.password.value !== document.signup.password2.value)
            {
                return false;
            } else {
                return true;
            }
        }*/
    </script>
    <script>
        $(document).ready(function () {
            var email = document.getElementById('email');

            email.addEventListener(function (event) {

                if (email.validity.typeMismatch) {
                    email.setCustomValidity("Must be email format: example@example.com");

                } else if (email.validity.valueMissing) {
                    email.setCustomValidity("Required field");

                } else {
                    email.setCustomValidity("");
                }
            });


            var password1 = document.getElementById('password');
            var password2 = document.getElementById('password2');

            password1.addEventListener(function (event) {
                if (password1.validity.valueMissing) {
                    password1.setCustomValidity("Required field");

                } else {
                    password1.setCustomValidity("");
                }
            });

            password2.addEventListener(function (event) {

                if (password2.validity.valueMissing) {
                    password2.setCustomValidity("Required field");

                } else {
                    password2.setCustomValidity("");
                }
            });

            var checkPasswordValidity = function () {
                if (password1.value != password2.value) {
                    password1.setCustomValidity('Passwords must match.');
                } else {
                    password1.setCustomValidity('');
                }
            };

            password1.addEventListener('change', checkPasswordValidity, false);
            password2.addEventListener('change', checkPasswordValidity, false);


        });
    </script>
</html>
