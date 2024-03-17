<?php
// Retrieve binary data from the request
$binaryData = file_get_contents("php://input");

// Process the received data (e.g., save to a file or database)
// Example: Save the received data to a file
$fileName = "received_image.psd";
file_put_contents($fileName, $binaryData);

// Send JSON response back to Photopea (optional)
$response = array(
    "message" => "File saved successfully"
);
echo json_encode($response);
?>
