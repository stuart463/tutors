<?php
include 'db.php';
$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "peer_tutors";

// Create connection
$conn = new mysqli($host, $db_user, $db_password, $db_names);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
