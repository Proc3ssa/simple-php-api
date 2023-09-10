<?php
// Make a request to the API
$api_url = 'http://localhost/projects/apilearn/api.php';
$response = file_get_contents($api_url);

// Decode the JSON response
$data = json_decode($response, true);

if ($data) {
    echo "Name: " . $data['name'] . "<br>";
    echo "Age: " . $data['age'] . "<br>";
    echo "City: " . $data['city'] . "<br>";
} else {
    echo "Failed to retrieve data from the API.";
}
?>
