<?php

// Starting Session
if (!isset($_SESSION)) {
    session_start();
}
$error = ''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Username or Password is invalid";
    } else {
        // Define $username and $password
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Establishing Connection with Server by passing server_name, user_id and password as a parameter
        // $connection = mysql_connect("localhost", "bookitbcit", "", "my_bookitbcit");
        $connection = mysql_connect("localhost", "bookitbcit", "", "my_bookitbcit");

        // To protect MySQL injection for Security purpose
        $username = stripslashes($username);
        $password = stripslashes($password);
        $username = mysql_real_escape_string($username);
        $password = mysql_real_escape_string($password);

        $encrypted_password = md5($password);

        // Selecting Database
        $db = mysql_select_db("my_bookitbcit", $connection);

        // SQL query to fetch information of registerd users and finds user match.
        $query = mysql_query("select * from user where password='$encrypted_password' AND username='$username'", $connection);
        $rows = mysql_num_rows($query);
        if ($rows == 1) {
            $_SESSION['login_user'] = $username; // Initializing Session
            header("location: reminders.php"); // Redirecting To Other Page
        } else {
            $error = "Username or Password is invalid";
            header("location: error.php"); // Redirecting To Other Page
            /* echo "I am here";
              echo $rows; */
        }
        mysql_close($connection); // Closing Connection
    }
}
?>