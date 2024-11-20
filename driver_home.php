<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'driver') {
    header("Location: signin.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Driver Home | LPU EV's</title>
    <link rel="stylesheet" href="driver.css">
</head>
<body>
    <nav>
        <div class="nav-content">
            <div class="logo">
                <a href="#">LPU EV's</a>
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
            <h2>Hello <?php echo $_SESSION['username']; ?></h2>
  <p>Please enter the details to start the service.</p>

  <div class="driver-details">
    </div>

                <form action="driver_details.php" method="POST">
                    <label for="location">Location:</label>
                    <select name="location" required>
                        <option value="" disabled selected>Select Location</option>
                        <option value="uni hospital">Uni Hospital</option>
                        <option value="gh5">GH5</option>
                        <option value="education block">Education Block</option>
                        <option value="25 block">25 Block</option>
                        <option value="BH4 ground">BH4 Ground</option>
                        <option value="55 block">55 Block</option>
                    </select>

                    <label for="auto_no">Auto Number (1-20):</label>
                    <input type="number" name="auto_no" min="1" max="20" required>

                    <label for="timing">Timing (7 AM - 6 PM):</label>
                    <input type="time" name="timing" min="07:00" max="18:00" required>

                    <label for="auto_type">Auto Type:</label>
                    <select name="auto_type" required>
                        <option value="6 seater">6 Seater</option>
                        <option value="9 seater">9 Seater</option>
                    </select>

                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
