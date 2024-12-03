<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo de Adivinhação</title>
    <style>
        /* Estilo do corpo com cor em degrade */
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #ff7e5f, #feb47b);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: white;
        }

        /* Estilo do contêiner principal */
        .container {
            text-align: center;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 30px;
            border-radius: 10px;
            width: 300px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        h1 {
            font-size: 2em;
        }

        input[type="number"] {
            padding: 10px;
            font-size: 1.2em;
            width: 60%;
            margin-bottom: 15px;
            border-radius: 5px;
            border: none;
        }

        button {
            padding: 10px 20px;
            font-size: 1.2em;
            background-color: #ff7e5f;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #feb47b;
        }

        .message {
            font-size: 1.3em;
            margin-top: 15px;
        }

        .message.correct {
            color: #4caf50;
        }

        .message.incorrect {
            color: #f44336;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Jogo de Adivinhação</h1>
        <p>Tente adivinhar o número entre 1 e 100!</p>
        <input type="number" id="guessInput" placeholder="Digite seu palpite" min="1" max="100">
        <button onclick="checkGuess()">Adivinhar</button>
        <p id="message" class="message"></p>
    </div>

    <script>
        // Gera o número aleatório entre 1 e 100
        let secretNumber = Math.floor(Math.random() * 100) + 1;
        let attempts = 0;

        // Função para checar o palpite
        function checkGuess() {
            const guessInput = document.getElementById('guessInput');
            const message = document.getElementById('message');
            const guess = parseInt(guessInput.value);
            attempts++;

            // Verifica se o número inserido é válido
            if (isNaN(guess) || guess < 1 || guess > 100) {
                message.textContent = "Por favor, insira um número entre 1 e 100.";
                message.classList.remove('correct', 'incorrect');
                return;
            }

            // Verifica se o palpite está correto
            if (guess === secretNumber) {
                message.textContent = `Parabéns! Você acertou o número em ${attempts} tentativas.`;
                message.classList.add('correct');
                message.classList.remove('incorrect');
                // Reinicia o jogo
                setTimeout(restartGame, 3000);
            } else if (guess < secretNumber) {
                message.textContent = "Tente um número maior!";
                message.classList.add('incorrect');
                message.classList.remove('correct');
            } else {
                message.textContent = "Tente um número menor!";
                message.classList.add('incorrect');
                message.classList.remove('correct');
            }
        }

        // Função para reiniciar o jogo
        function restartGame() {
            secretNumber = Math.floor(Math.random() * 100) + 1;
            attempts = 0;
            document.getElementById('guessInput').value = '';
            document.getElementById('message').textContent = '';
        }
    </script>
</body>
</html>
