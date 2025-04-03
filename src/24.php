<?php

class ProjectManager {
    public function addProject($projectName) {
        echo "New project added: $projectName";
    }

    public function showAllProjects() {
        echo "Showing all projects:\n";
        foreach (projectList as $project) {
            echo "- $project\n";
        }
    }
}

$projectManager = new ProjectManager();

// Add a new project
$projectManager->addProject("My First Project");

// Show the list of all projects
$projectManager->showAllProjects();
