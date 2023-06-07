<?php
require_once("connect.php");

//to sanitise data so that no XSS/SQL injections can take place
function SanitiseInputs(&$inputs) {
    global $dbhost, $dbusername, $dbpassword, $dbname; // Assuming these variables are defined in "connect.php"

    $conn = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);

    // Convert the input into an array if it's a string
    if (!is_array($inputs)) {
        $inputs = array($inputs);
    }

    foreach ($inputs as &$input) {
        $input = trim($input); // Remove leading and trailing whitespace
        $input = stripslashes($input); // Remove backslashes
        $input = htmlspecialchars($input); // Convert special characters to HTML entities
        
        // SQL injection prevention
        $input = mysqli_real_escape_string($conn, $input); // Escape special characters for MySQL
    }

    mysqli_close($conn); // Close the database connection
}
?>
