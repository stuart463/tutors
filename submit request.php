<?php
include 'db.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $subject = $_POST['subject'];
    $description = $_POST['description'];
    $student = $_SESSION['username'];

    $sql = "INSERT INTO tutoring_requests (student, subject, description)
            VALUES ('$student', '$subject', '$description')";

    if ($conn->query($sql) === TRUE) {
        echo "Request submitted successfully.";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
