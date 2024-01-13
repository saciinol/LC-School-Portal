<?php

$servername = 'localhost';
$username = 'root';
$password = '123';
$db_name = "school_portal";

// Connecting to database
try {
    $conn = new PDO("mysql:host=$servername;dbname=$db_name;port=3307", $username, $password);
    // Set error mode to exception to get error output
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected Successfully";
} catch (\Exception $e) {
    $error_message = $e->getMessage();
}
