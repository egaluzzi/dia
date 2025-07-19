<?php
// Get the date and branch parameters from the query string
$date = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
$branch = isset($_GET['branch']) ? $_GET['branch'] : null;

// Validate the branch parameter and ensure it's one of the allowed branches
if (!$branch || !in_array($branch, ['Victoria', 'Acassuso', 'ViLo'])) {
    http_response_code(400);
    echo json_encode(array('error' => 'Invalid or missing branch.'));
    exit();
}

// Define the API keys for each branch
$apiKeys = array(
    'Victoria' => 'bf6c4291-0d96-44e1-9f02-e104ff546908',  
    'Acassuso' => 'e58179ec-e88a-4753-ad1d-b9609d614f38',  
    'ViLo'     => 'c397344d-6fef-42f4-8bc8-d6b3b3406177',  
);

// Get the API key for the selected branch
$apiKey = $apiKeys[$branch];

// Set the API endpoint (fetch data for the specified date)
$apiUrl = 'https://app.quierojugar.com.uy/api/classes?date=' . $date;

// Initialize a cURL session
$ch = curl_init($apiUrl);

// Set the API key in the headers dynamically based on the branch
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'API-KEY: ' . $apiKey
));

// Return the response instead of outputting it directly
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Set headers to prevent caching
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Expires: Sat, 01 Jan 2000 00:00:00 GMT');
header('Pragma: no-cache');

// Execute the cURL request
$response = curl_exec($ch);

// Check for cURL errors
if ($response === false) {
    $error = curl_error($ch);
    curl_close($ch);
    http_response_code(500);
    echo json_encode(array('error' => 'Error fetching data: ' . $error));
    exit();
}

// Close the cURL session
curl_close($ch);

// Decode the JSON response
$data = json_decode($response, true);

// Check if the response data is valid JSON
if ($data === null) {
    http_response_code(500);
    echo json_encode(array('error' => 'Error decoding API response.'));
    exit();
}

// Set the content type to JSON
header('Content-Type: application/json');

// Output the data as is
echo json_encode($data);
?>
