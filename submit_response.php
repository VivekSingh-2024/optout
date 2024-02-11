<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the selected reason to unsubscribe
    $reason = $_POST['unsubscribe_reason'];

    // Validate and sanitize input (optional)
    $reason = htmlspecialchars($reason);

    // CSV file path
    $file = 'responses.csv';

    // Open the CSV file in append mode
    $handle = fopen($file, 'a');

    // If the file doesn't exist, create a new one and add a header
    if (filesize($file) == 0) {
        fputcsv($handle, array('Timestamp', 'Reason'));
    }

    // Add the response to the CSV file
    fputcsv($handle, array(date("Y-m-d H:i:s"), $reason));

    // Close the file handle
    fclose($handle);

    // Redirect to a thank you page
    header('Location: thank_you.html');
    exit;
}
?>
