<?php
// FAQ Data
$faqs = [
    [
        "question" => "What is the LPU E-Vehicle System?",
        "answer" => "The LPU E-Vehicle System is a platform designed to promote the use of electric vehicles for sustainable and eco-friendly transportation."
    ],
    [
        "question" => "How do I register for the E-Vehicle system?",
        "answer" => "You can register by visiting the website and completing the 'Sign Up' form."
    ],
    [
        "question" => "What are the benefits of using the E-Vehicle system?",
        "answer" => "Eco-friendly transportation, reduced costs, minimal maintenance, and easy bookings."
    ],
    [
        "question" => "What happens in case of a vehicle breakdown?",
        "answer" => "Contact support via the 'Help & Support' section for prompt assistance."
    ],
    [
        "question" => "Are there any subscription plans available?",
        "answer" => "Yes, we offer flexible subscription plans for daily, weekly, and monthly users."
    ],
    [
        "question" => "Do I need a driving license to use the service?",
        "answer" => "Yes, a valid driving license is mandatory to use our vehicles."
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - LPU E-Vehicle</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #FFA500;
            color: #FFF;
            margin: 50px;
            padding: 20px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 3rem;
        }
        .main-container {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }
        .faq-container {
            width: 60%;
        }
        .faq {
            background: #06032b;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 15px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .faq h3 {
            margin: 0;
            font-size: 18px;
        }
        .faq .symbol {
            font-size: 18px;
            font-weight: bold;
            color: #FFF;
        }
        .faq-answer {
            margin-top: 10px;
            padding: 15px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 8px;
            display: none;
            color: #06032b;
            margin-bottom: 15px;
        }
        .form-container {
            width: 35%;
            background: #06032b;
            padding: 20px;
            border-radius: 10px;
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 15px;
        }
        .form-container form {
            display: flex;
            flex-direction: column;
        }
        .form-container input[type="text"],
        .form-container textarea,
        .form-container button {
            margin-bottom: 15px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            font-size: 16px;
        }
        .form-container input[type="text"],
        .form-container textarea {
            background-color: rgba(255, 255, 255, 0.1);
            color: #FFF;
        }
        .form-container button {
            background-color: #FFA500;
            color: #FFF;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .form-container button:hover {
            background-color: #FF8C00;
        }
    </style>
</head>
<body>
    <h1>FAQs</h1>
    <div class="main-container">
        <!-- FAQ Section -->
        <div class="faq-container">
            <?php foreach ($faqs as $index => $faq): ?>
                <div class="faq" onclick="toggleAnswer(<?php echo $index; ?>)">
                    <h3><?php echo $faq['question']; ?></h3>
                    <span class="symbol" id="symbol-<?php echo $index; ?>">+</span>
                </div>
                <div class="faq-answer" id="answer-<?php echo $index; ?>">
                    <?php echo $faq['answer']; ?>
                </div>
            <?php endforeach; ?>
        </div>
        
        <!-- Query Form Section -->
        <div class="form-container">
            <h2>Ask Your Query</h2>
            <form action="submit_query.php" method="POST">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="text" name="email" placeholder="Your Email" required>
                <textarea name="query" rows="5" placeholder="Type your query here..." required></textarea>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>

    <script>
        function toggleAnswer(index) {
            const answer = document.getElementById(`answer-${index}`);
            const symbol = document.getElementById(`symbol-${index}`);
            if (answer.style.display === "none" || answer.style.display === "") {
                answer.style.display = "block";
                symbol.textContent = "−";
            } else {
                answer.style.display = "none";
                symbol.textContent = "+";
            }
        }
    </script>
</body>
</html>
