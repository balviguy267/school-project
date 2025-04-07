<?php

// Initialize database connection
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "project_database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Example query to retrieve a single record from the database
$sql = "SELECT * FROM projects WHERE id = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Single row data retrieved successfully!";
} else {
    echo "No rows found.";
}

$conn->close();
?>
