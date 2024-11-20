<?php
include 'db.php'; // Database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role']; // Role: user or driver

    // Ensure the role is correctly passed
    if (!in_array($role, ['user', 'driver'])) {
        die("Invalid role selected.");
    }

    $table = ($role === 'user') ? 'users' : 'drivers';

    try {
        // Fetch user or driver based on the role and username
        $sql = "SELECT * FROM $table WHERE username = :username";
        $stmt = $conn->prepare($sql);
        $stmt->execute(['username' => $username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$user) {
            echo "<script>alert('User not found'); window.location.href='signin.html';</script>";
            exit();
        }

        // Check if the password matches
        if (password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $role;

            // Redirect based on role
            if ($role === 'user') {
                header("Location: index.php");
            } else {
                header("Location: driver_home.php");
            }
            exit();
        } else {
            echo "<script>alert('Invalid Credentials'); window.location.href='signin.html';</script>";
        }
    } catch (PDOException $e) {
        echo "<script>alert('Database Error: " . $e->getMessage() . "'); window.location.href='signin.html';</script>";
    }
}
?>
