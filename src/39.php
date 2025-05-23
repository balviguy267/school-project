<?php
// Initialize your database connection here

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "student_project";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch and display student data
$sql = "SELECT * FROM students";
$result = $conn->query($sql);
echo "<table><thead><tr><th>ID</th><th>Name</th></tr></thead><tbody>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td></tr>";
}
echo "</tbody></table>";

$conn->close();
?>
