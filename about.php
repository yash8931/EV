<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - LPU E-Vehicle System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #FFA500;
            color: #FFF;
            margin: 0;
            padding: 20px;
            line-height: 1.6;
        }
        h1, h2 {
            text-align: center;
        }
        .about-section {
            background: #06032b;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
            text-align: center;
        }
        .developer-section {
            text-align: center;
        }
        .card-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        .card {
            background: #06032b;
            padding: 20px;
            border-radius: 10px;
            width: 250px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .card img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 15px;
        }
        .card h3 {
            margin: 0;
            font-size: 20px;
        }
        .card p {
            font-size: 14px;
            color: #CCC;
        }
    </style>
</head>
<body>
    <!-- About Section -->
    <h1>About LPU E-Vehicle System</h1>
    <div class="about-section">
        <p>
            The LPU E-Vehicle System is an innovative platform aimed at promoting sustainable and eco-friendly 
            transportation within the Lovely Professional University campus. This initiative is designed to encourage 
            the adoption of electric vehicles, reducing carbon footprints while offering cost-effective and 
            convenient transportation solutions to students, staff, and visitors.
        </p>
        <p>
            With features like easy booking, seamless registration, and user-friendly navigation, the system is a step 
            forward in building a greener and smarter campus. Join us in embracing the future of transportation!
        </p>
    </div>

    <!-- Developer Section -->
    <h2>Meet the Developers</h2>
    <div class="developer-section">
        <div class="card-container">
            <!-- Developer 1 -->
            <div class="card">
                <img src="https://via.placeholder.com/100" alt="Developer 1">
                <h3>Aman Sharma</h3>
                <p>Full-Stack Developer</p>
                <p>Specializes in building responsive web interfaces and managing back-end services.</p>
            </div>
            <!-- Developer 2 -->
            <div class="card">
                <img src="https://via.placeholder.com/100" alt="Developer 2">
                <h3>Priya Gupta</h3>
                <p>UI/UX Designer</p>
                <p>Expert in crafting user-friendly designs and improving user experiences.</p>
            </div>
            <!-- Developer 3 -->
            <div class="card">
                <img src="https://via.placeholder.com/100" alt="Developer 3">
                <h3>Rahul Verma</h3>
                <p>Back-End Developer</p>
                <p>Focused on database management, API integrations, and server-side development.</p>
            </div>
            <!-- Developer 4 -->
            <div class="card">
                <img src="https://via.placeholder.com/100" alt="Developer 4">
                <h3>Simran Kaur</h3>
                <p>Project Manager</p>
                <p>Ensures smooth coordination and timely delivery of the project.</p>
            </div>
        </div>
    </div>
</body>
</html>
