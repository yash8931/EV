<?php
session_start();

// Generate a random auto number between 1 and 20
$auto_number = rand(1, 20);

// Initialize variables
$location = $time = $seat_preference = $vehicle_number = '';
$service_type = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['location'])) {
        $location = htmlspecialchars($_POST['location']);
    }
    
    if (isset($_POST['time'])) {
        $time = htmlspecialchars($_POST['time']);
        $service_type = 'Pre-Book Service';
    } elseif (isset($_POST['vehicleNumber'])) {
        $vehicle_number = htmlspecialchars($_POST['vehicleNumber']);
        $service_type = 'On-Time Service';
    }
    
    if (isset($_POST['seatPreference'])) {
        $seat_preference = htmlspecialchars($_POST['seatPreference']);
    }
    
    // Store the data in session for persistence
    $_SESSION['booking_data'] = [
        'location' => $location,
        'time' => $time,
        'seat_preference' => $seat_preference,
        'vehicle_number' => $vehicle_number,
        'service_type' => $service_type,
        'auto_number' => $auto_number
    ];
} elseif (isset($_SESSION['booking_data'])) {
    // Retrieve data from session if it exists
    extract($_SESSION['booking_data']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment | LPU EV's</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@200;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="payment.css">
</head>
<body>
    <div class="container">
        <div class="mainBgn">
            <h1 id="cardFlare" class="boldfont"><em>PAYMENT</em></h1>
            <div class="ride-details">
                <h2>Ride Details</h2>
                <p><strong>Amount:</strong> ₹15</p>
                <p><strong>Service Type:</strong> <?php echo $service_type; ?></p>
                <p><strong>Location:</strong> <?php echo $location; ?></p>
                <?php if ($service_type == 'Pre-Book Service'): ?>
                    <p><strong>Scheduled Time:</strong> <?php echo $time; ?></p>
                    <p><strong>Seat Preference:</strong> <?php echo $seat_preference; ?></p>
                <?php elseif ($service_type == 'On-Time Service'): ?>
                    <p><strong>Vehicle Number:</strong> <?php echo $vehicle_number; ?></p>
                <?php endif; ?>
                <p><strong>Auto Number:</strong> <?php echo $auto_number; ?></p>
            </div>
            <form id="paymentForm">
                <div id="paymentMethodSection">
                    <label for="paymentMethod">Select Payment Method:</label>
                    <select id="paymentMethod" name="paymentMethod">
                        <option value="" disabled selected>Choose a payment method</option>
                        <option value="paytm">Paytm</option>
                        <option value="gpay">Google Pay</option>
                        <option value="cred">Cred</option>
                        <option value="bhim">BHIM UPI</option>
                        <option value="phonepe">PhonePe</option>
                    </select>
                </div>
                <div class="qr"><img src="qr.png" alt=""></div>
                <div class="or-separator">OR</div>

                <div id="upiIdSection">
                    <label for="upiId">Enter UPI ID:</label>
                    <input type="text" id="upiId" name="upiId" placeholder="Enter UPI ID">
                </div>

                <button type="submit">Pay Now</button>
            </form>
        </div>
    </div>

    <script>
        // ... (keep the existing JavaScript code)
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('paymentForm');
            const paymentMethod = document.getElementById('paymentMethod');
            const upiId = document.getElementById('upiId');

            paymentMethod.addEventListener('change', function() {
                upiId.value = '';
                upiId.disabled = this.value !== '';
            });

            upiId.addEventListener('input', function() {
                paymentMethod.value = '';
                paymentMethod.disabled = this.value !== '';
            });

            form.addEventListener('submit', function(e) {
                e.preventDefault();
                if (paymentMethod.value === '' && upiId.value === '') {
                    alert('Please select a payment method or enter a UPI ID');
                } else {
                    alert('Payment initiated!');
                    // Here you would typically send the form data to your server
                }
            });
        });
    </script>
</body>
</html>