
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Números Primos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #4facfe, #00f2fe);
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
            width: 200px;
        }
        .result {
            margin-top: 20px;
            font-size: 1.2em;
        }
        .prime {
            color: #32CD32; /* Verde para números primos */
        }
        .not-prime {
            color: #FF6347; /* Vermelho para números não primos */
        }
    </style>
</head>
<body>

    <h1>Calculadora de Números Primos</h1>
    
    <div class="container">
        <form method="POST">
            <label for="numbers">Digite números separados por espaço:</label><br>
            <input type="text" id="numbers" name="numbers" required><br>
            <button type="submit">Verificar</button>
        </form>
        
        <div class="result">
            <?php
                // Função que verifica se o número é primo
                function is_prime($n) {
                    if ($n <= 1) {
                        return false;
                    }
                    $i = 2;
                    while ($i * $i <= $n) {
                        if ($n % $i == 0) {
                            return false;
                        }
                        $i++;
                    }
                    return true;
                }

                // Verificando os números fornecidos pelo usuário
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $numbers = explode(" ", $_POST['numbers']);
                    foreach ($numbers as $number) {
                        $number = trim($number);
                        if (is_numeric($number)) {
                            if (is_prime($number)) {
                                echo "<p class='prime'>$number é primo.</p>";
                            } else {
                                echo "<p class='not-prime'>$number não é primo.</p>";
                            }
                        } else {
                            echo "<p class='not-prime'>O valor '$number' não é um número válido.</p>";
                        }
                    }
                }
            ?>
        </div>
    </div>

</body>
</html>
