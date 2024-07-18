<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio_builder";

// Create connection
try {
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }
} catch (Exception $e) {
    die("Connection error: " . $e->getMessage());
}
?>