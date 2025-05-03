<?php
include 'db.php';
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    echo "<p>Please <a href='login.html'>login</a> to view requests.</p>";
    exit;
}

echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <title>View Tutoring Requests</title>
    <link rel='stylesheet' href='css/style.css'>
</head>
<body>
    <header>
        <h1>Tutoring Requests</h1>
        <nav>
            <a href='index.html'>Home</a>
            <a href='submit_request.html'>Submit Request</a>
            <a href='logout.php'>Logout</a>
        </nav>
    </header>
    <main>";

// Join with users table to get full user info
$sql = "SELECT r.id, u.username AS student, r.subject, r.description, r.status, r.created_at
        FROM tutoring_requests r
        JOIN users u ON r.user_id = u.id
        ORDER BY r.created_at DESC";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
            <tr>
                <th>Student</th>
                <th>Subject</th>
                <th>Description</th>
                <th>Status</th>
                <th>Date Submitted</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['student']}</td>
                <td>{$row['subject']}</td>
                <td>{$row['description']}</td>
                <td>{$row['status']}</td>
                <td>{$row['created_at']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<p>No tutoring requests found.</p>";
}

echo "</main></body></html>";
?>
