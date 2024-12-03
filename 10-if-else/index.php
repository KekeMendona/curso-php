<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descobrindo PAR ou ÍMPAR!</title>
    <style>
        /* Fundo com degradê suave */
        body {
            background: linear-gradient(to bottom right, #a1c4fd, #c2e9fb); /* Degradê de azul claro para azul pastel */
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #333; /* Cor escura para maior contraste */
        }

        /* Estilo do título */
        h1 {
            color: #2c3e50; /* Cor escura para o texto */
            text-align: center;
            background-color: rgba(255, 255, 255, 0.8); /* Fundo branco com transparência */
            padding: 20px 40px;
            border-radius: 10px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2); /* Sombra suave para destacar o texto */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra sutil para dar profundidade */
        }

        /* Estilo para o conteúdo principal */
        .content {
            background: rgba(255, 255, 255, 0.9); /* Fundo claro para o conteúdo */
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1); /* Sombra suave ao redor do conteúdo */
            text-align: center;
            max-width: 800px;
            width: 100%;
        }

        /* Estilo dos inputs e botão */
        input, button {
            font-size: 16px;
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #ccc; /* Borda suave */
            margin-top: 10px;
            width: 80%;
            max-width: 300px;
        }

        input {
            background-color: #f7f7f7; /* Cor de fundo suave para o input */
        }

        button {
            background-color: #7f8c8d; /* Cor cinza suave para o botão */
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #95a5a6; /* Cor um pouco mais clara ao passar o mouse */
        }

        /* Estilo para o resultado */
        #result {
            margin-top: 20px;
            font-size: 20px;
            font-weight: bold;
        }

        /* Responsividade */
        @media (max-width: 600px) {
            h1 {
                font-size: 1.5em;
            }

            .content {
                padding: 20px;
            }

            input, button {
                width: 100%;
            }
        }
    </style>
</head>
<body>

    <div class="content">
        <h1>Descobrindo se um número é PAR ou ÍMPAR!</h1>
        
        <p>Insira um número para saber se ele é par ou ímpar:</p>
        
        <!-- Formulário para o usuário digitar o número -->
        <input type="number" id="numberInput" placeholder="Digite um número" />
        <button class="button" onclick="checkParity()">Verificar</button>
        
        <p id="result"></p>
    </div>

    <script>
        // Função para verificar se o número é PAR ou ÍMPAR
        function checkParity() {
            let number = document.getElementById('numberInput').value;
            let result = document.getElementById('result');
            
            if (number === '') {
                result.textContent = "Por favor, insira um número!";
                result.style.color = "red";
            } else {
                if (number % 2 === 0) {
                    result.textContent = "O número " + number + " é PAR.";
                    result.style.color = "green";
                } else {
                    result.textContent = "O número " + number + " é ÍMPAR.";
                    result.style.color = "blue";
                }
            }
        }
    </script>

</body>
</html>
