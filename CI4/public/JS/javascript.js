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