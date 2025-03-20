<?php

$project_name = "My School Project";

function displayProject($description) {
    echo "<h1>$project_name</h1>";
    echo "<p>" . $description . "</p>";
}

displayProject("This is a sample description.");
