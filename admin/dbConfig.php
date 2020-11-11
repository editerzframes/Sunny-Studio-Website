<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "sunny";

// Create database connection
$db = mysqli_connect($dbHost, $dbUsername, $dbPassword);
$connection = mysqli_select_db($db, "sunny");
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>