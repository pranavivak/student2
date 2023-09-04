---
toc: true
comments: false
layout: post
title: Memory Card Matching
description: memory card matching game
type: hacks
courses: { compsci: {week: 2} }
---

<!DOCTYPE html>
<html>
<head>
    <title>Memory Card Game</title>
    <style>
        body {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        .card {
            width: 100px;
            height: 150px;
            background-color: #fff;
            margin: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            font-size: 24px;
            font-weight: bold;
            border: 2px solid #333;
            border-radius: 5px;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
            transition: transform 0.2s;
        }

        .card.flipped {
            transform: scale(1.05);
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <div id="game-board"></div>

    <script>
        const cardValues = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'];
        let cards = [];
        let flippedCards = [];

        function createGameBoard() {
            const gameBoard = document.getElementById("game-board");
            cardValues.sort(() => Math.random() - 0.5);

            for (let i = 0; i < cardValues.length; i++) {
                const card = document.createElement("div");
                card.className = "card";
                card.textContent = cardValues[i];
                card.addEventListener("click", () => flipCard(card));
                gameBoard.appendChild(card);
                cards.push(card);
            }
        }

        function flipCard(card) {
            if (!card.classList.contains("flipped") && flippedCards.length < 2) {
                card.classList.add("flipped");
                flippedCards.push(card);

                if (flippedCards.length === 2) {
                    setTimeout(checkForMatch, 1000);
                }
            }
        }

        function checkForMatch() {
            const [card1, card2] = flippedCards;

            if (card1.textContent === card2.textContent) {
                card1.classList.remove("flipped");
                card2.classList.remove("flipped");
                card1.classList.add("matched");
                card2.classList.add("matched");
            } else {
                card1.classList.remove("flipped");
                card2.classList.remove("flipped");
            }

            flippedCards = [];

            // Check if all cards are matched
            if (document.querySelectorAll('.matched').length === cardValues.length) {
                setTimeout(() => alert("Congratulations! You've matched all pairs!"), 500);
            }
        }

        createGameBoard();
    </script>
</body>
</html>

