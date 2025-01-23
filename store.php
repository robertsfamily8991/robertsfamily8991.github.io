<?php
// Set error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Get the data from the URL (use GET parameters or raw POST data)
$lat = isset($_GET['lat']) ? $_GET['lat'] : 'Unknown';
$long = isset($_GET['long']) ? $_GET['long'] : 'Unknown';
$ip = isset($_GET['ip']) ? $_GET['ip'] : 'Unknown';
$os = isset($_GET['os']) ? $_GET['os'] : 'Unknown';
$browser = isset($_GET['browser']) ? $_GET['browser'] : 'Unknown';

// Prepare the log entry
$logEntry = "\n\n--- New Log Entry ---\n";
$logEntry .= "Latitude: $lat\n";
$logEntry .= "Longitude: $long\n";
$logEntry .= "IP Address: $ip\n";
$logEntry .= "Operating System: $os\n";
$logEntry .= "Browser: $browser\n";
$logEntry .= "Timestamp: " . date("Y-m-d H:i:s") . "\n";

// File path
$file = 'device_log.txt';

// Open the file in append mode (creates the file if it doesn't exist)
$myfile = fopen($file, 'a');

// Check if file opened successfully
if ($myfile) {
    fwrite($myfile, $logEntry); // Write the log entry to the file
    fclose($myfile); // Close the file
} else {
    echo "Error opening the file for writing.";
}
?>
