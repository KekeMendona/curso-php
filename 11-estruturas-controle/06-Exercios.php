<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classificação de Idade</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        label {
            font-size: 16px;
            color: #555;
        }
        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .result {
            margin-top: 20px;
            padding: 15px;
            background-color: #e0f7fa;
            border: 1px solid #00acc1;
            border-radius: 4px;
        }
        .result p {
            margin: 5px 0;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Classificação de Idade</h1>

    <!-- Formulário para inserir idades -->
    <form method="POST">
        <?php
        // Exibindo campos para inserir idades
        for ($i = 1; $i <= 5; $i++) {
            echo "<label for='idade$i'>Digite a idade da pessoa $i:</label>";
            echo "<input type='number' id='idade$i' name='idade$i' required><br><br>";
        }
        ?>
        <input type="submit" value="Classificar Idades">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Função para classificar a idade
        function classificarIdade($idade) {
            if ($idade >= 0 && $idade <= 12) {
                return "Criança";
            } elseif ($idade >= 13 && $idade <= 17) {
                return "Adolescente";
            } elseif ($idade >= 18 && $idade <= 59) {
                return "Adulto";
            } else {
                return "Idoso";
            }
        }

        // Exibir as idades inseridas e suas classificações
        echo "<div class='result'>";
        for ($i = 1; $i <= 5; $i++) {
            $idade = $_POST["idade$i"];
            $classificacao = classificarIdade($idade);
            echo "<p>A pessoa $i tem $idade anos e é classificada como $classificacao.</p>";
        }
        echo "</div>";
    }
    ?>
</div>

</body>
</html>