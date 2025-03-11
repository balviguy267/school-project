
<?php
// Get the current user's name and email address from the database
$user = $_SESSION['user'];
$name = $user['name'];
$email = $user['email'];

// Get the project details from the database
$project = Project::find($id);
$title = $project->title;
$description = $project->description;
$technologies = $project->technologies;

// Set up a new instance of the Mailgun API client
$mgClient = new Mailgun\Mailgun('YOUR_MAILGUN_API_KEY');

// Send an email to the project owner with the details of the new submission
$mgClient->sendMessage(
    'YOUR_DOMAIN',
    [
        'from' => "{$name} <{$email}>",
        'to' => $projectOwnerEmail,
        'subject' => "New Submission for Project {$title}",
        'text' => "{$name} has submitted a new project with the following details:\n\nTitle: {$title}\nDescription: {$description}\nTechnologies Used: {$technologies}"
    ]
);