<?php
// Definir a variável de erro
$erro = '';

// Definir os valores iniciais
$resultado = 0;
$num1 = 0;
$num2 = 0;
$operacao = '';

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obter os valores dos inputs
    $num1 = isset($_POST['num1']) ? (float) $_POST['num1'] : 0;
    $num2 = isset($_POST['num2']) ? (float) $_POST['num2'] : 0;
    $operacao = $_POST['operacao'];
    
    // Processar a operação
    switch ($operacao) {
        case 'somar':
            $resultado = $num1 + $num2;
            break;
        case 'subtrair':
            $resultado = $num1 - $num2;
            break;
        case 'multiplicar':
            $resultado = $num1 * $num2;
            break;
        case 'dividir':
            if ($num2 == 0) {
                $erro = 'Erro: Divisão por zero não permitida.';
            } else {
                $resultado = $num1 / $num2;
            }
            break;
        default:
            $erro = 'Operação inválida!';
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Infinita</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
        }
        .container {
            width: 300px;
            margin: 0 auto;
        }
        .result {
            font-size: 20px;
            margin-bottom: 20px;
        }
        .error {
            color: red;
        }
        .form-group {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Calculadora Infinita</h2>

    <!-- Exibir erro, se houver -->
    <?php if ($erro): ?>
        <div class="error"><?= $erro ?></div>
    <?php endif; ?>

    <!-- Resultado da operação -->
    <div class="result">
        <?php if (!$erro): ?>
            <strong>Resultado: </strong> <?= $resultado ?>
        <?php endif; ?>
    </div>

    <form action="" method="post">
        <div class="form-group">
            <label for="num1">Primeiro número:</label>
            <input type="number" step="any" name="num1" id="num1" value="<?= $num1 ?>" required>
        </div>

        <div class="form-group">
            <label for="num2">Segundo número:</label>
            <input type="number" step="any" name="num2" id="num2" value="<?= $num2 ?>" required>
        </div>

        <div class="form-group">
            <label for="operacao">Operação:</label>
            <select name="operacao" id="operacao" required>
                <option value="somar" <?= $operacao == 'somar' ? 'selected' : '' ?>>Somar</option>
                <option value="subtrair" <?= $operacao == 'subtrair' ? 'selected' : '' ?>>Subtrair</option>
                <option value="multiplicar" <?= $operacao == 'multiplicar' ? 'selected' : '' ?>>Multiplicar</option>
                <option value="dividir" <?= $operacao == 'dividir' ? 'selected' : '' ?>>Dividir</option>
            </select>
        </div>

        <button type="submit">Calcular</button>
    </form>

    <br>

    <!-- Botão para reiniciar a calculadora -->
    <form action="" method="get">
        <button type="submit">Nova operação</button>
    </form>
</div>

</body>
</html>
