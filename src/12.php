<?php
// Connect to the database
$conn = new mysqli('localhost', 'user', 'password', 'database');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Select all rows from the table
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

// Display the results
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<p>" . $row["name"] . "</p>";
    }
} else {
    echo "0 results";
}

// Close the connection
$conn->close();
?>