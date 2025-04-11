<?php
// This PHP script is used to display data from an API.
// Replace 'YOUR_API_KEY' with your actual API key if you have one.
// Replace '/path/to/api/data.json' with the actual path to your JSON data file.

$api_key = "YOUR_API_KEY";
$data_file = "/path/to/api/data.json";

// Load the data from the JSON file
$json_data = file_get_contents($data_file);

// Extract and print the data
$data = json_decode(json_encode($json_data), true);

echo "API Data: \n";
foreach ($data as $item) {
    echo "Name: " . $item['name'] . "\n";
    echo "Age: " . $item['age'] . "\n";
    echo "Email: " . $item['email'] . "\n\n";
}
?>
