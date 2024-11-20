<?php
include 'db.php'; // Database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $registration_number = $_POST['registration_number']; // Capture registration number
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash the password

    // Identify the role (User or Driver)
    $role = isset($_POST['role']) && $_POST['role'] === 'driver' ? 'driver' : 'user';

    try {
        // Insert into the appropriate table based on the role
        if ($role === 'user') {
            $sql = "INSERT INTO users (username, email, registration_number, password) 
                    VALUES (:username, :email, :registration_number, :password)";
        } else {
            $sql = "INSERT INTO drivers (username, email, registration_number, password) 
                    VALUES (:username, :email, :registration_number, :password)";
        }

        $stmt = $conn->prepare($sql);
        $stmt->execute([
            'username' => $username,
            'email' => $email,
            'registration_number' => $registration_number,
            'password' => $password
        ]);

        // Redirect to the Sign-In page after successful registration
        header("Location: signin.html");
        exit();
    } catch (PDOException $e) {
        // Handle database errors gracefully
        header("Location: signin.html?error=" . urlencode($e->getMessage()));
        exit();
    }
}
?>
