<?php
include 'db.php'; // Database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = md5($_POST['password']); // MD5 for matching passwords

    // Check if driver credentials are valid
    $sql = "SELECT * FROM drivers WHERE username = :username AND password = :password";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['username' => $username, 'password' => $password]);
    $driver = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($driver) {
        session_start();
        $_SESSION['driver_username'] = $driver['username'];
        header("Location: driver_home.php");
    } else {
        echo "<script>alert('Invalid Credentials'); window.location.href='driver_login.html';</script>";
    }
}
?>
