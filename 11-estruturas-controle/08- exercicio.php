<?php
// Função para calcular a soma dos números pares até o número fornecido
function calcularSomaPares($numero) {
    $soma = 0;
    $i = 1;

    // Laço while para percorrer os números de 1 até o número fornecido
    while ($i <= $numero) {
        if ($i % 2 == 0) {  // Verifica se o número é par
            $soma += $i; // Soma o número par
        }
        $i++; // Incrementa o contador
    }

    return $soma;
}

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém o número fornecido pelo usuário
    $numero = (int)$_POST['numero'];

    // Valida se o número é positivo
    if ($numero <= 0) {
        echo "Por favor, insira um número inteiro positivo.\n";
        exit; // Encerra o script caso a entrada seja inválida
    }

    // Calcula a soma dos números pares até o número fornecido
    $somaPares = calcularSomaPares($numero);

    // Obtém a resposta do usuário
    $resposta = (int)$_POST['resposta'];

    // Verifica se a resposta está correta
    if ($resposta === $somaPares) {
        echo "Parabéns! Você acertou a soma dos números pares.\n";
    } else {
        echo "Que pena, a resposta correta é: $somaPares.\n";
    }
} else {
    // Exibe o formulário para o usuário inserir o número e a adivinhação
    echo "<h2>Bem-vindo ao jogo de números pares!</h2>";
    echo "<p>Digite um número inteiro positivo e tente adivinhar a soma de todos os números pares de 1 até esse número.</p>";
    echo "<form method='POST'>";
    echo "Digite um número inteiro positivo: <input type='number' name='numero' required><br><br>";
    echo "Agora, tente adivinhar a soma dos números pares: <input type='number' name='resposta' required><br><br>";
    echo "<input type='submit' value='Enviar'>";
    echo "</form>";
}
?>
