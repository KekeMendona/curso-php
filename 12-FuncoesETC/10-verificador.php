<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Palíndromos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #f6d365, #fda085);
            color: white;
            text-align: center;
            padding: 50px;
        }
        h1 {
            font-size: 3em;
            margin-bottom: 20px;
        }
        .container {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 30px;
            border-radius: 10px;
            display: inline-block;
        }
        input, button {
            padding: 10px;
            font-size: 1.2em;
            margin-top: 10px;
        }
        input[type="text"] {
            width: 300px;
        }
        .result {
            margin-top: 20px;
            font-size: 1.5em;
        }
        .info {
            color: yellow;
            font-size: 1.2em;
        }
    </style>
</head>
<body>

    <h1>Verificador de Palíndromos</h1>
    
    <div class="container">
        <form method="POST">
            <label for="text">Digite uma palavra ou frase:</label><br>
            <input type="text" id="text" name="text" required><br>
            <button type="submit">Verificar</button>
        </form>

        <div class="result">
            <?php
                // Função para verificar se é um palíndromo
                function is_palindrome($text) {
                    // Remove espaços, pontuação e converte para minúsculas
                    $text = preg_replace("/[^a-zA-Z0-9]/", "", $text); // Remove tudo que não é letra ou número
                    $text = strtolower($text); // Converte para minúsculas

                    // Variáveis para comparar os caracteres
                    $left = 0;
                    $right = strlen($text) - 1;

                    // Laço para comparar os caracteres da esquerda com os da direita
                    while ($left < $right) {
                        if ($text[$left] !== $text[$right]) {
                            return "Não é um palíndromo.";
                        }
                        $left++;
                        $right--;
                    }

                    return "É um palíndromo.";
                }

                // Verificando a entrada do usuário e chamando a função
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $text = $_POST['text'];
                    $result = is_palindrome($text);
                    echo "<p>$result</p>";
                }
            ?>
        </div>
    </div>

</body>
</html>
