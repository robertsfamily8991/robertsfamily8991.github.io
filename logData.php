<?php
// Read the raw POST data
$data = json_decode(file_get_contents('php://input'), true);

// Prepare the log entry
$log = "Timestamp: " . date("Y-m-d H:i:s") . "\n";
$log .= "Latitude: " . $data['latitude'] . "\n";
$log .= "Longitude: " . $data['longitude'] . "\n";
$log .= "IP Address: " . $data['ipAddress'] . "\n";
$log .= "Location: " . $data['location'] . "\n";
$log .= "User-Agent: " . $data['userAgent'] . "\n";
$log .= "Platform: " . $data['platform'] . "\n";
$log .= "---------------------------\n";

// Write the log entry to a file
file_put_contents('device_logs.txt', $log, FILE_APPEND);

echo "Data logged successfully.";
?>
