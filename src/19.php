<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Style;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Project Showcase</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th,
        td {
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <h1>Student Project Showcase</h1>

    <?php
    // Example of adding data to the table using HTML
    ?>
    <table>
        <thead>
            <tr>
                <th>Project Title</th>
                <th>Description</th>
                <th>Author</th>
                <th>Date Added</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Example of adding data to the table using PHP code
            foreach (range(1, 5) as $index) {
                $projectTitle = "Project $index";
                $description = "This is a description for project $index.";
                $authorName = "John Doe";
                $dateAdded = date("Y-m-d H:i:s", strtotime("+2 days"));

                echo "<tr>";
                echo "<td>" . htmlspecialchars($projectTitle) . "</td>";
                echo "<td>" . htmlspecialchars($description) . "</td>";
                echo "<td>" . htmlspecialchars($authorName) . "</td>";
                echo "<td>" . htmlspecialchars($dateAdded) . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <p>Collaborative Dashboard</p>
    <?php
    // Example of adding data to the table using HTML
    ?>
    <table>
        <thead>
            <tr>
                <th>User Name</th>
                <th>Date Added</th>
                <th>Activity</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Example of adding data to the table using PHP code
            foreach (range(1, 5) as $index) {
                $userId = "User $index";
                $dateAdded = date("Y-m-d H:i:s", strtotime("+2 days"));

                echo "<tr>";
                echo "<td>" . htmlspecialchars($userId) . "</td>";
                echo "<td>" . htmlspecialchars($dateAdded) . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</body>
</html>
