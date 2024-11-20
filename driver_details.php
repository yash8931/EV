<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'driver') {
    header("Location: signin.html");
    exit();
}

// Retrieve form data
$location = $_POST['location'];
$auto_no = $_POST['auto_no'];
$timing = $_POST['timing'];
$auto_type = $_POST['auto_type'];

// Generate user data based on auto type
$user_count = ($auto_type == '6 seater') ? 6 : 9;
$users = [];
$names = ['Alice', 'Bob', 'Charlie', 'David', 'Eva', 'Frank', 'Grace', 'Henry', 'Ivy'];
$statuses = ['Confirmed', 'Waiting', 'Cancelled'];

for ($i = 0; $i < $user_count; $i++) {
    $users[] = [
        "name" => $names[$i],
        "payment" => rand(150, 300),
        "status" => $statuses[array_rand($statuses)],
        "booking_id" => "BK" . str_pad(rand(1, 9999), 4, '0', STR_PAD_LEFT)
    ];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking Details | LPU EV's</title>
    <link rel="stylesheet" href="driver.css">
</head>
<body>
    <nav>
        <div class="nav-content">
            <div class="logo">
                <a href="driver_home.php">LPU EV's</a>
            </div>
            <ul class="nav-links">
                <li><a href="driver_home.php">Home</a></li>
                <li><a href="logout.php">Sign Out</a></li>
            </ul>
        </div>
    </nav>
    <div class="content">
        <div class="card-container">
            <div class="container">
                <h2>Booking Details</h2>
                <p>Here are the details for your current booking.</p>
                <div class="driver-details">
                    <p>Location: <?php echo $location; ?></p>
                    <p>Auto Number: <?php echo $auto_no; ?></p>
                    <p>Timing: <?php echo $timing; ?></p>
                    <p>Auto Type: <?php echo $auto_type; ?></p>
                </div>
                <button onclick="showPassengerDetails()" class="show-details-btn">Show Passenger Details</button>
            </div>
        </div>
        <div id="passenger-details" class="card-container" style="display:none;">
            <div class="container">
                <h2>Passenger Details</h2>
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Payment (INR)</th>
                        <th>Status</th>
                        <th>Booking ID</th>
                    </tr>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?php echo $user['name']; ?></td>
                            <td><?php echo $user['payment']; ?></td>
                            <td><?php echo $user['status']; ?></td>
                            <td><?php echo $user['booking_id']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
    <script>
        function showPassengerDetails() {
            document.getElementById('passenger-details').style.display = 'block';
        }
    </script>
</body>
</html>