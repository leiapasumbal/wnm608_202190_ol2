<?php
// Database credentials
define('DB_SERVER', 'localhost:3306');
define('DB_USERNAME', 'id22071658_leiapasumbal');
define('DB_PASSWORD', 'TaylorSwift13!');
define('DB_NAME', 'id22071658_leiadb');

// Function to create and return the database connection
function makeConn() {
    // Create a new mysqli object with database connection parameters
    $conn = new mysqli('localhost', 'id22071658_leiapasumbal', 'TaylorSwift13!', 'id22071658_leiadb');
    
    // Check if the connection was successful
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Return the mysqli object if the connection is successful
    return $conn;
}
?>