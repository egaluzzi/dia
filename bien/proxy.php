<?php
// Get the date parameter from the query string, or use today's date if not provided
$date = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');

// Validate the date format (YYYY-MM-DD)
if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $date)) {
    http_response_code(400);
    echo json_encode(array('error' => 'Invalid date format.'));
    exit();
}

// Set the API endpoint (fetch data for the specified date)
$apiUrl = 'https://app.quierojugar.com.uy/api/classes?date=' . $date;

// Initialize a cURL session
$ch = curl_init($apiUrl);

// Set the API key in the headers
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'API-KEY: bf6c4291-0d96-44e1-9f02-e104ff546908'
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