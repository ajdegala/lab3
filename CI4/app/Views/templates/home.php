<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ashly Jude's Website</title>
        <link rel="stylesheet" type="text/css" href="<?= base_url('CSS/styles.css') ?>">

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4edf0; /* Calm pinkish-purple */
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-image: url("Images/purplehaze.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-attachment: fixed;
        }

        header {
            text-align: center;
            margin-bottom: 20px;
        }

        h1, h2, h3 {
            margin: 5px 0;
            color: #724c82; /* Purple */
        }

        p {
            font-family: "Comic Sans MS", cursive, sans-serif;
            font-size: 18px;
            color: #333;
            text-align: center;
            margin: 10px 0;
        }

        img.profile-picture {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            object-fit: cover;
            border: 5px solid #724c82; /* Purple */
            margin-bottom: 10px;
        }

        .social-buttons {
            display: flex;
            gap: 10px;
            margin-top: 20px;
            align-items: center;
        }

        .social-button {
            background-color: #b98ebf; /* Light purple */
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            display: flex;
            align-items: center;
        }

        .social-button img {
            width: 20px;
            height: 20px;
            margin-right: 10px;
        }

        .social-button:hover {
            background-color: #9b6f9f; /* Darker purple */
        }

        .comment-section {
            width: 60%;
            margin-top: 30px;
        }

        .comment {
            border: 1px solid #724c82; /* Purple */
            padding: 10px;
            margin-bottom: 10px;
            background-color: #f9f4f7; /* Light pink */
            border-radius: 8px;
        }

        .comment input {
            margin-right: 10px;
            padding: 8px;
        }

        .action-button {
            background-color: #724c82; /* Purple */
            color: white;
            border: none;
            padding: 10px 20px;
            margin: 5px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .action-button:hover {
            background-color: #563856; /* Darker purple */
        }
    </style>
</head>
<body>
    <header>
        <img src="<?= base_url('Images/jude.jpg') ?>" alt="Jude">
                <img src="jude.jpg" alt="Jude">
        <h1>Welcome to Ashly Jude's Website!</h1>
        <h2>Asia Pacific College 2023</h2>
        <h3>I'm a very chill guy</h3>
    </header>

    <main>
        <p onmouseover="increaseFontSize(this)" onmouseout="restoreFontSize(this)">Sucks at games</p>
        <p onmouseover="increaseFontSize(this)" onmouseout="restoreFontSize(this)">Currently a student</p>

        <div class="social-buttons">
            <a href="https://www.facebook.com/issmeee.lyjude" class="social-button" target="_blank">
            <img src="<?= base_url('Images/facebook.png') ?>" alt="facebook">
                <img src="facebook.png" alt="Facebook Icon">
                Facebook
            </a>
            <a href="https://twitter.com/ashly_jd" class="social-button" target="_blank">
            <img src="<?= base_url('Images/twitter.png') ?>" alt="twitter">
                <img src="twitter.png" alt="Twitter Icon">
                Twitter
            </a>
            <a href="https://www.instagram.com/ashly_jd/" class="social-button" target="_blank">
            <img src="<?= base_url('Images/instagram.png') ?>" alt="instagram">
                <img src="instagram.png" alt="Instagram Icon">
                Instagram
            </a>
        </div>
    </main>

    <button class="action-button" onclick="toggleBackground()">Toggle Background Image</button>
    <button class="action-button" onclick="changeRandomColor()">Change Background Color</button>

    <label for="nameInput">Enter Your Name:</label>
    <input type="text" id="nameInput" />
    <button class="action-button" onclick="displayGreeting()">Display Greeting</button>
    <p id="greetingMessage"></p>

    <button class="action-button" onclick="startCountdown()">Start Countdown</button>
    <p id="countdown"></p>

    <button class="action-button" onclick="toggleParagraphs()">Toggle Paragraphs</button>

    <div class="comment-section">
        <h2>Leave a Comment:</h2>
        <div class="comment">
            <input type="text" id="commentInput" placeholder="Your comment...">
            <button class="action-button" onclick="addComment()">Submit</button>
        </div>
        <div id="comments"></div>
    </div>

        <script src="<?= base_url('JS/script.js') ?>"></script>
    <script>
        window.onload = function() {
            alert("Welcome to Ashly Jude's!");
            startCountdown();
        };

        var originalFontSize;

        function increaseFontSize(element) {
            originalFontSize = window.getComputedStyle(element, null).getPropertyValue('font-size');
            element.style.fontSize = "30px";
        }

        function restoreFontSize(element) {
            element.style.fontSize = originalFontSize;
        }

        function toggleBackground() {
            var body = document.body;
            var currentBackground = body.style.backgroundImage;

            if (currentBackground === 'none') {
                body.style.backgroundImage = 'url("cloud.jpg")';
            } else {
                body.style.backgroundImage = 'none';
            }
        }

        // Change Background Color
        function changeRandomColor() {
            var colors = ["#FF6347", "#7FFFD4", "#FFD700", "#8A2BE2", "#00FF7F", "#FF4500"];
            var randomColor = colors[Math.floor(Math.random() * colors.length)];
            document.body.style.backgroundColor = randomColor;
        }

        // Display Greeting
        function displayGreeting() {
            var nameInput = document.getElementById("nameInput").value;
            var greetingMessage = document.getElementById("greetingMessage");
        }

            if (nameInput.trim() !== "") {
                greetingMessage.textContent = "Hello, " + nameInput + "! Welcome to the website!";
            } else {
                greetingMessage.textContent = "Please";
        }
    </script>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name: <input type="text" name="name" value="<?php echo $name;?>">
    <span class="error">* <?php echo $name_err;?></span>
    <br><br>
    Email: <input type="text" name="email" value="<?php echo $email;?>">
    <span class="error">* <?php echo $email_err;?></span>
    <br><br>
    Gender:
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other
    <span class="error">* <?php echo $gender_err;?></span>
    <br><br>
    Message: <textarea name="message" rows="5" cols="40"><?php echo $message;?></textarea>
    <span class="error">* <?php echo $message_err;?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>
