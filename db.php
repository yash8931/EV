<?php
$host = 'localhost';
$dbname = 'lpuev';
$username = 'root'; // Default username for WAMP
$password = '';     // Default password is empty

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
