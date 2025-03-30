<?php
// Include necessary libraries
require_once 'vendor/autoload.php';

// Define the project's class name
$projectClassName = 'MyProjectName\\MyProjectClass'; // Replace with your actual project class

// Get the instance of the project class
$projectInstance = new $projectClassName();

// Access methods and properties
echo "Hello from {$projectInstance->name}! I'm a project named {$projectInstance->name}.";
?>
