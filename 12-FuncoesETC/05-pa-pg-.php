<?php
// Função para calcular a Progressão Aritmética (PA)
function calcularPA($a1, $r, $n) {
    $pa = [];
    for ($i = 0; $i < $n; $i++) {
        $pa[] = $a1 + $i * $r; // Fórmula da PA
    }
    return $pa;
}

// Função para calcular a Progressão Geométrica (PG)
function calcularPG($a1, $r, $n) {
    $pg = [];
    for ($i = 0; $i < $n; $i++) {
        $pg[] = $a1 * pow($r, $i); // Fórmula da PG
    }
    return $pg;
}

// Verificando se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recebe os valores do formulário
    $a1 = isset($_POST['a1']) ? (float) $_POST['a1'] : 0;
    $r = isset($_POST['r']) ? (float) $_POST['r'] : 0;
    $n = isset($_POST['n']) ? (int) $_POST['n'] : 0;

    // Calculando as progressões
    $pa = calcularPA($a1, $r, $n);
    $pg = calcularPG($a1, $r, $n);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Progressões Aritmética e Geométrica</title>
    <style>
        /* Fundo temático de espaço */
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(45deg, #1b1b2f, #24243e, #6a11cb);
            background-size: 400% 400%;
            animation: gradientAnimation 15s ease infinite;
            color: white;
            padding: 40px;
            margin: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        
        /* Animação do fundo */
        @keyframes gradientAnimation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Estilo do container */
        .container {
            max-width: 600px;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            text-align: center;
        }

        h2 {
            color: #FFD700;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        input[type="number"], input[type="submit"], select {
            padding: 10px;
            width: 100%;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
            background-color: #333;
            color: white;
        }

        input[type="submit"] {
            background-color: #2575fc;
            border: none;
            color: white;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #1c60c1;
        }

        .result {
            margin-top: 20px;
            font-size: 18px;
            color: #fff;
            text-align: left;
        }

        .result span {
            font-weight: bold;
        }

        .planet {
            font-size: 40px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Calculadora de Progressões Aritmética e Geométrica</h2>

    <form action="" method="post">
        <div class="form-group">
            <label for="a1">Primeiro Termo (a1):</label>
            <input type="number" name="a1" id="a1" value="<?= isset($a1) ? $a1 : '' ?>" required>
        </div>

        <div class="form-group">
            <label for="r">Razão (r):</label>
            <input type="number" name="r" id="r" value="<?= isset($r) ? $r : '' ?>" required>
        </div>

        <div class="form-group">
            <label for="n">Número de Termos:</label>
            <input type="number" name="n" id="n" value="<?= isset($n) ? $n : '' ?>" required>
        </div>

        <input type="submit" value="Calcular">
    </form>

    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
        <div class="result">
            <h3>Resultado da Progressão Aritmética (PA):</h3>
            <p><span>PA: </span><?= implode(' → ', $pa) ?></p>

            <h3>Resultado da Progressão Geométrica (PG):</h3>
            <p><span>PG: </span><?= implode(' → ', $pg) ?></p>
        </div>
    <?php endif; ?>

    <!-- Adicionar ícone de planeta para completar o tema -->
    <div class="planet">🌌</div>
</div>

</body>
</html>
