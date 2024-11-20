<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'user') {
    header("Location: signin.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>LPU EV's</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
    <nav>
        <div class="nav-content">
            <div class="logo">
                <a href="#">LPU EV's</a>
            </div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="logout.php">Sign Out</a></li>
                <li><a href="help.php">Help</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
        </div>
    </nav>
    
    <div class="content">
        <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
        
        <!-- Card Containers -->
        <div class="card-container">
            <div class="container" onclick="window.location.href='ontime-service.php'">
                <div class="wrapper">
                    <div class="banner-image" style="background-image: url('https://images.unsplash.com/photo-1593941707882-a5bba14938c7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1172&q=80');"></div>
                    <h2>On-Time Service</h2>
                    <p>Quick and efficient<br/>EV charging on the go</p>
                </div>
                <div class="button-wrapper">
                    <button class="btn outline">BOOK NOW</button>
                </div>
            </div>

            <div class="container" onclick="window.location.href='prebook-service.php'">
                <div class="wrapper">
                    <div class="banner-image" style="background-image: url('https://images.unsplash.com/photo-1614624532983-4ce03382d63d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1331&q=80');"></div>
                    <h2>Pre-Book Service</h2>
                    <p>Plan ahead and secure<br/>your charging slot</p>
                </div>
                <div class="button-wrapper">
                    <button class="btn outline">SCHEDULE</button>
                </div>
            </div>
        </div>

        <!-- New Features Section -->
        <!-- <div class="features">
            <h1>Why Choose LPU EV's?</h1>
            <div class="features-list">
                <div class="feature-item">
                    <h3>Eco-Friendly</h3>
                    <p>Our EVs are sustainable and contribute to a greener future.</p>
                </div>
                <div class="feature-item">
                    <h3>Fast Charging</h3>
                    <p>Enjoy quick and efficient charging at any of our stations.</p>
                </div>
                <div class="feature-item">
                    <h3>Convenience</h3>
                    <p>Easy-to-use platform to manage your bookings anytime, anywhere.</p>
                </div>
            </div>
        </div> -->

        <!-- Testimonials Section -->
        <!-- <section class="testimonials">
            <h2>What Our Users Say</h2>
            <div class="testimonial">
                <p>"The service is fast and easy to use. I love being able to book my charging station in advance!"</p>
                <span>- John Doe</span>
            </div>
            <div class="testimonial">
                <p>"A truly eco-friendly and reliable service. Highly recommend for EV owners!"</p>
                <span>- Jane Smith</span>
            </div>
        </section> -->

        <!-- Contact Information Section -->
        <!-- <section class="contact">
            <h2>Contact Us</h2>
            <p>If you have any questions or need assistance, feel free to reach out!</p>
            <p>Email: support@lpuev.com</p>
            <p>Phone: +1 234 567 890</p>
        </section> -->
    </div>
</body>
</html>
