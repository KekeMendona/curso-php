<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Aprovação Escolar</title>
    <style>
        /* Corpo da página com fundo em degrade */
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #6a11cb, #2575fc);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: white;
        }

        /* Contêiner central do conteúdo */
        .container {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            width: 400px;
            text-align: center;
        }

        h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        label {
            font-size: 1.2em;
            margin: 10px 0;
            display: block;
        }

        input[type="number"] {
            width: 80%;
            padding: 10px;
            font-size: 1.2em;
            margin-bottom: 20px;
            border-radius: 5px;
            border: none;
            outline: none;
            background-color: #fff;
            color: #333;
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

        .result {
            font-size: 1.5em;
            margin-top: 20px;
            font-weight: bold;
        }

        .result.approved {
            color: #4caf50;
        }

        .result.failed {
            color: #f44336;
        }

        /* Estilo do botão de reiniciar */
        .reset-btn {
            padding: 10px 20px;
            font-size: 1em;
            background-color: #2575fc;
            color: white;
            border: none;
            border-radius: 5px;
            margin-top: 15px;
            cursor: pointer;
        }

        .reset-btn:hover {
            background-color: #6a11cb;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Sistema de Aprovação Escolar</h1>
        <label for="nota1">Nota 1:</label>
        <input type="number" id="nota1" placeholder="Digite a primeira nota" min="0" max="10">
        
        <label for="nota2">Nota 2:</label>
        <input type="number" id="nota2" placeholder="Digite a segunda nota" min="0" max="10">
        
        <label for="nota3">Nota 3:</label>
        <input type="number" id="nota3" placeholder="Digite a terceira nota" min="0" max="10">
        
        <button onclick="calcularAprovacao()">Verificar Aprovação</button>
        
        <p id="resultado" class="result"></p>
        <button class="reset-btn" onclick="resetar()">Reiniciar</button>
    </div>

    <script>
        function calcularAprovacao() {
            // Pega as notas dos inputs
            const nota1 = parseFloat(document.getElementById('nota1').value);
            const nota2 = parseFloat(document.getElementById('nota2').value);
            const nota3 = parseFloat(document.getElementById('nota3').value);
            const resultado = document.getElementById('resultado');
            
            // Validação de entrada
            if (isNaN(nota1) || isNaN(nota2) || isNaN(nota3) || nota1 < 0 || nota1 > 10 || nota2 < 0 || nota2 > 10 || nota3 < 0 || nota3 > 10) {
                resultado.textContent = "Por favor, insira notas válidas (0 a 10).";
                resultado.classList.remove('approved', 'failed');
                return;
            }

            // Calcula a média
            const media = (nota1 + nota2 + nota3) / 3;

            // Verifica se o aluno foi aprovado ou reprovado
            if (media >= 7) {
                resultado.textContent = `Aprovado! Média: ${media.toFixed(2)}`;
                resultado.classList.add('approved');
                resultado.classList.remove('failed');
            } else {
                resultado.textContent = `Reprovado! Média: ${media.toFixed(2)}`;
                resultado.classList.add('failed');
                resultado.classList.remove('approved');
            }
        }

        function resetar() {
            // Limpa os campos e o resultado
            document.getElementById('nota1').value = '';
            document.getElementById('nota2').value = '';
            document.getElementById('nota3').value = '';
            document.getElementById('resultado').textContent = '';
        }
    </script>
</body>
</html>