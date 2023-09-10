<?php
//simple api
$data = array(
    'name' => 'John Doe',
    'age' => 30,
    'city' => 'Example City'
);

header('Content-Type: application/json');
echo json_encode($data);
?>
