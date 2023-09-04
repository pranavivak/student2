---
toc: true
comments: false
layout: post
title: Rock Paper Scissors
description: the classic Rock Paper Scissors Game!!
type: hacks
courses: { compsci: {week: 2} }
---

<html>
<head>
    <title>Rock, Paper, Scissors Game</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
        }
        .choice-button {
            margin: 10px;
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Rock, Paper, Scissors Game</h1>
    <p>Choose your move:</p>
    <button class="choice-button" onclick="playGame('rock')">Rock</button>
    <button class="choice-button" onclick="playGame('paper')">Paper</button>
    <button class="choice-button" onclick="playGame('scissors')">Scissors</button>
    <p id="result"></p>

    <script>
        function playGame(userChoice) {
            const choices = ["rock", "paper", "scissors"];
            const computerChoice = choices[Math.floor(Math.random() * 3)];

            const resultElement = document.getElementById("result");

            if (userChoice === computerChoice) {
                resultElement.textContent = `It's a tie! You both chose ${userChoice}.`;
            } else if (
                (userChoice === "rock" && computerChoice === "scissors") ||
                (userChoice === "paper" && computerChoice === "rock") ||
                (userChoice === "scissors" && computerChoice === "paper")
            ) {
                resultElement.textContent = `You win! ${userChoice} beats ${computerChoice}.`;
            } else {
                resultElement.textContent = `You lose! ${computerChoice} beats ${userChoice}.`;
            }
        }
    </script>
</body>
</html>
