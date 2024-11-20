<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>LPU EV's - On-Time Service</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <nav>
        <div class="nav-content">
            <div class="logo">
                <a href="index.php">LPU EV's</a>
            </div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="logout.php">Sign Out</a></li>
            </ul>
        </div>
    </nav>

    <div class="content">
        <h1>On-Time Service</h1>
        <div class="card-container">
            <div class="container">
                <div class="wrapper">
                    <h2>Book Your Charging Slot</h2>
                    <p>Quick and efficient<br/>EV charging on the go</p>
                </div>
                <form action="payment.php" method="POST">
                    <input type="text" name="vehicleNumber" placeholder="Vehicle Number" required>
                    <select name="location" required>
                      <option value="" disabled selected>Select Location</option>
                      <option value="uni hospital">Uni Hospital</option>
                      <option value="gh5">GH5</option>
                      <option value="education block">Education Block</option>
                      <option value="25 block">25 Block</option>
                      <option value="BH4 ground">BH4 Ground</option>
                      <option value="55 block">55 Block</option>
                  </select>
                    <button type="submit" class="btn outline">Proceed to Payment</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>