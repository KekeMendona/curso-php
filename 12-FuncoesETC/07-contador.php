<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Palavras Únicas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #ff7e5f, #feb47b);
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
            font-size: 1em;
            margin-top: 10px;
        }
        input[type="text"] {
            width: 300px;
        }
        .result {
            margin-top: 20px;
            font-size: 1.5em;
        }
    </style>
</head>
<body>

    <h1>Contador de Palavras Únicas</h1>
    
    <div class="container">
        <form method="POST">
            <label for="text">Digite uma frase:</label><br>
            <input type="text" id="text" name="text" required><br>
            <button type="submit">Contar Palavras Únicas</button>
        </form>
        
        <div class="result">
            <?php
                // Função para contar palavras únicas
                function count_unique_words($text) {
                    // Converte para minúsculas para ignorar diferenças de maiúsculas e minúsculas
                    $text = strtolower($text);
                    
                    // Remove caracteres não alfabéticos e separa a string em palavras
                    $text = preg_replace("/[^a-zá-ú ]/", "", $text);
                    $words = explode(" ", $text);
                    
                    // Filtra palavras vazias
                    $words = array_filter($words, function($word) {
                        return !empty($word);
                    });

                    // Remove palavras duplicadas
                    $unique_words = array_unique($words);
                    
                    return count($unique_words);
                }

                // Verificando a entrada do usuário
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $text = $_POST['text'];
                    $unique_word_count = count_unique_words($text);
                    echo "<p>Existem $unique_word_count palavras únicas na frase.</p>";
                }
            ?>
        </div>
    </div>

</body>
</html>
