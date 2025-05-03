<?php
include 'db.php';
session_start();

// Only show this to admin users
echo "<h1>Admin Panel</h1>";

// Example: display all registered users
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

echo "<h2>Registered Users</h2>";
while($row = $result->fetch_assoc()) {
    echo $row['username'] . " | " . $row['email'] . "<br>";
}
?>
