<?php
// Database configuration
$host = 'localhost';         // Your database host (default is localhost for XAMPP)
$dbname = 'maruthamunai_handloom';  // The name of your database
$username = 'root';          // Your database username (default is root for XAMPP)
$password = '';              // Your database password (leave blank for XAMPP)

try {
    // Create a new PDO connection
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
