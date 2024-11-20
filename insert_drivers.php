<?php
include 'db.php'; // Ensure database connection

// Predefined drivers data
$drivers = [
    [
        'username' => 'driver1',
        'email' => 'driver1@example.com',
        'registration_number' => 'REG1234',
        'password' => 'pass1'
    ],
    [
        'username' => 'driver2',
        'email' => 'driver2@example.com',
        'registration_number' => 'REG5678',
        'password' => 'pass2'
    ],
    [
        'username' => 'driver3',
        'email' => 'driver3@example.com',
        'registration_number' => 'REG9101',
        'password' => 'pass3'
    ],
    [
        'username' => 'driver4',
        'email' => 'driver4@example.com',
        'registration_number' => 'REG1213',
        'password' => 'pass4'
    ]
];

try {
    // SQL query to insert driver data into the drivers table
    $sql = "INSERT INTO drivers (username, email, registration_number, password) 
            VALUES (:username, :email, :registration_number, :password)";
    $stmt = $conn->prepare($sql);

    // Loop through the drivers array to insert each driver
    foreach ($drivers as $driver) {
        // Hash the password using PASSWORD_BCRYPT
        $hashedPassword = password_hash($driver['password'], PASSWORD_BCRYPT);

        // Execute the prepared statement with driver data
        $stmt->execute([
            'username' => $driver['username'],
            'email' => $driver['email'],
            'registration_number' => $driver['registration_number'],
            'password' => $hashedPassword
        ]);
    }

    echo "Drivers inserted successfully!";
} catch (PDOException $e) {
    echo "Database Error: " . $e->getMessage();
}
?>
