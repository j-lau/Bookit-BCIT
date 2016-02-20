<?php

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
// $connection = mysql_connect("localhost", "bookitbcit", "", "my_bookitbcit");
$connection = mysql_connect("localhost", "bookitbcit", "", "my_bookitbcit");

// Selecting Database
$db = mysql_select_db("my_bookitbcit", $connection);
// Starting Session
if (!isset($_SESSION)) {
    session_start();
}
// Storing Session
$user_check = $_SESSION['login_user'];

// SQL Query To Fetch Complete Information Of User
$ses_sql = mysql_query("select * from user where username='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session = $row['firstName'] . " " . $row['lastName'];

// SQL Query To Fetch Complete Information Of User
$ses_sql_name = mysql_query("select * from user where username='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql_name);
$login_session_user = $row['username'];

if (!isset($login_session)) {
    mysql_close($connection); // Closing Connection
    header('location: reminders.php'); // Redirecting To Home Page
}
?>