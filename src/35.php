<?php

// Function to display project details
function displayProjectDetails($project) {
    echo "Project Name: $project";
}

// Function to display student data
function displayStudentData($students) {
    foreach ($students as $student) {
        echo "Name: $student->name, Age: $student->age\n";
    }
}

// Main function to manage project management and student information
function manageProjectAndStudents() {
    // Example code for managing projects

    $projects = [
        ['project-name', 'description1'],
        ['another-project-name', 'description2']
    ];

    displayProjectDetails("My First Project");
    displayStudentData([
        "John",
        25,
        "Jane",
        30
    ]);

    manageProjectAndStudents();
}

// Call the function to start project management
manageProjectAndStudents();

?>
