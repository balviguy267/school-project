<?php
// Example PHP code for demonstration purposes

// Assuming you have some variables and arrays ready
$student1 = [
  "name" => "John",
  "age" => 20,
  "subject" => "Math"
];

$student2 = [
  "name" => "Jane",
  "age" => 19,
  "subject" => "Science"
];

// Example of adding students to the array
$students = [ $student1, $student2 ];

// Function to display student data
function displayStudents() {
    echo "<h2>Student Data</h2>";
    foreach ($students as $student) {
        echo "<div><p>Name: " . $student["name"] . "</p></div>";
        echo "<div><p>Age: " . $student["age"] . "</p></div>";
        echo "<div><p>Subject: " . $student["subject"] . "</p></div>";
    }
}

// Display student data
displayStudents();
?>
