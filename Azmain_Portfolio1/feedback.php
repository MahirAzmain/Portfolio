<?php
session_start();
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mahir";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO feedback (name, email, subject, description) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $description);

    // Set parameters and execute
    $name = $_POST['user_name'];
    $email = $_POST['user_email'];
    $subject = $_POST['user_subject'];
    $description = $_POST['user_message'];

    // Execute the statement
    if ($stmt->execute()) {
        $_SESSION['feedback']="Feedback send";
        header("Location: ../../index.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>