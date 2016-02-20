<?php

// session_start(); // Starting Session
$error = ''; // Variable To Store Error Message

if (isset($_POST['nextbut'])) {
    if (empty($_POST['stdId']) || empty($_POST['firstName']) || empty($_POST['lastName']) || empty($_POST['password']) ||
            empty($_POST['password2']) || empty($_POST['email']) || empty($_POST['number'])) {
        $error = "Cannot have any empty fields";
        header("location: signup.php");
    } else {

        // Define $username and $password
        $stdId = $_POST['stdId'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];
        $email = $_POST['email'];
        $number = $_POST['number'];

        if (strcmp($password, $password2)) {
            $error = "Passwords do not match.";
            header("location: signup.php"); // Redirecting To Other Page
        }

        // Establishing Connection with Server by passing server_name, user_id and password as a parameter
        $connection = mysql_connect("localhost", "bookitbcit", "", "my_bookitbcit");
        //$connection = mysql_connect("localhost", "root", "", "my_bookitbcit");

        // To protect MySQL injection for Security purpose
        $stdId = stripslashes($stdId);
        $firstName = stripslashes($firstName);
        $lastName = stripslashes($lastName);
        $password = stripslashes($password);
        $email = stripslashes($email);
        $number = stripslashes($number);

        $stdId = mysql_real_escape_string($stdId);
        $firstName = mysql_real_escape_string($firstName);
        $lastName = mysql_real_escape_string($lastName);
        $password = mysql_real_escape_string($password);
        $email = mysql_real_escape_string($email);
        $number = mysql_real_escape_string($number);

        // encrypt password 
        $encrypted_password = md5($password);
        // echo $encrypted_password;
        // Selecting Database
        $db = mysql_select_db("my_bookitbcit", $connection);

        // SQL query to insert information of registerd users and finds user match.
        $query = "SELECT * FROM user WHERE username = '$stdId' LIMIT 1;";
        $result = mysql_query($query);
        $totalNumRowResult = mysql_num_rows($result);

        if ($totalNumRowResult > 0) {
            header("location: error_username.php"); // Redirecting To Other Page
        } else {
            $query = "insert into user (username, firstName, lastName, password, phone_no, email) values "
                    . "('$stdId', '$firstName', '$lastName', '$encrypted_password', '$number', '$email');";

            $retval = mysql_query($query, $connection);

            if (!$retval) {
                die("Could not enter data " . mysql_error());
            } else {
                //echo "Good to go.";
                header("location: success.php"); // Redirecting To Other Page
            }
        }

        mysql_close($connection);
    }
} else {

    //echo "Nothing in isset variable.";
}
?>