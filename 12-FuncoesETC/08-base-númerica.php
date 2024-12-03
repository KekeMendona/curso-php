<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Base Numérica</title>
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
        input, button, select {
            padding: 10px;
            font-size: 1em;
            margin-top: 10px;
        }
        input[type="number"], select {
            width: 200px;
        }
        .result {
            margin-top: 20px;
            font-size: 1.5em;
        }
    </style>
</head>
<body>

    <h1>Conversor de Base Numérica</h1>
    
    <div class="container">
        <form method="POST">
            <label for="number">Digite o número decimal:</label><br>
            <input type="number" id="number" name="number" required><br>

            <label for="base">Escolha a base para conversão:</label><br>
            <select id="base" name="base" required>
                <option value="binario">Binário</option>
                <option value="octal">Octal</option>
                <option value="hexadecimal">Hexadecimal</option>
            </select><br>

            <button type="submit">Converter</button>
        </form>
        
        <div class="result">
            <?php
                // Função para converter o número decimal para binário, octal ou hexadecimal
                function convert_base($number, $base) {
                    if ($number < 0) {
                        return "Número inválido";
                    }

                    switch ($base) {
                        case "binario":
                            $result = "";
                            while ($number > 0) {
                                $result = ($number % 2) . $result;
                                $number = intdiv($number, 2);
                            }
                            return $result ? $result : "0";
                        case "octal":
                            $result = "";
                            while ($number > 0) {
                                $result = ($number % 8) . $result;
                                $number = intdiv($number, 8);
                            }
                            return $result ? $result : "0";
                        case "hexadecimal":
                            $hex_chars = "0123456789ABCDEF";
                            $result = "";
                            while ($number > 0) {
                                $result = $hex_chars[$number % 16] . $result;
                                $number = intdiv($number, 16);
                            }
                            return $result ? $result : "0";
                        default:
                            return "Base desconhecida";
                    }
                }

                // Verificando a entrada do usuário e chamando a função de conversão
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $number = intval($_POST['number']);
                    $base = $_POST['base'];
                    $converted = convert_base($number, $base);
                    echo "<p>O número $number em $base é: $converted</p>";
                }
            ?>
        </div>
    </div>

</body>
</html>
