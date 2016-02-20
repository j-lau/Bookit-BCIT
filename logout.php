<?php

if (!isset($_SESSION)) {
    session_start();
}
session_destroy();  // Destroying All Sessions
session_unset();
header("location: index.php"); // Redirecting To Home Page
?>