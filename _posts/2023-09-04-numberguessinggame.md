---
toc: true
comments: false
layout: post
title: Number Guessing Game
description:  Simple web-based guessing game where the player can enter their guesses and receive feedback. The game allows a maximum of 10 attempts.
type: hacks
courses: { compsci: {week: 2} }
---

<html>
<head>
    <title>Guess the Number Game</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
    <h1>Guess the Number Game</h1>
    <p>Guess a number between 1 and 100:</p>
    <input type="number" id="userGuess" min="1" max="100">
    <button onclick="checkGuess()">Submit Guess</button>
    <p id="message"></p>

    <script>
        // Generate a random number between 1 and 100
        const secretNumber = Math.floor(Math.random() * 100) + 1;
        let attempts = 0;
        const maxAttempts = 10;

        function checkGuess() {
            const userGuess = parseInt(document.getElementById("userGuess").value);
            attempts++;

            const messageElement = document.getElementById("message");

            if (isNaN(userGuess) || userGuess < 1 || userGuess > 100) {
                messageElement.textContent = "Please enter a valid number between 1 and 100.";
            } else if (userGuess === secretNumber) {
                messageElement.textContent = `Congratulations! You guessed the number ${secretNumber} in ${attempts} attempts.`;
                disableInputAndButton();
            } else if (userGuess < secretNumber) {
                messageElement.textContent = "Try a higher number.";
            } else {
                messageElement.textContent = "Try a lower number.";
            }

            if (attempts >= maxAttempts) {
                messageElement.textContent = `Sorry, you've reached the maximum number of attempts. The secret number was ${secretNumber}.`;
                disableInputAndButton();
            }
        }

        function disableInputAndButton() {
            document.getElementById("userGuess").disabled = true;
            document.querySelector("button").disabled = true;
        }
    </script>
</body>
</html>
