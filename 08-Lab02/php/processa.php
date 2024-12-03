<?php
// 1. Receber o salário inicial
$salario_inicial = 3000; // Exemplo de salário (pode ser alterado pelo aluno)

// 2. Aumento de 10% sobre o salário inicial
$aumento_10 = $salario_inicial * 1.10;

// 3. Desconto de 15% sobre o salário inicial
$desconto_15 = $salario_inicial * 0.85;

// 4. Aumento de 40% sobre o salário inicial
$aumento_40 = $salario_inicial * 1.40;

// 5. Calcular as diferenças entre os salários
$diferenca_aumento_10 = $aumento_10 - $salario_inicial;
$diferenca_desconto_15 = $salario_inicial - $desconto_15;
$diferenca_aumento_40 = $aumento_40 - $salario_inicial;

// 6. Mostrar os resultados
echo "Salário Inicial: R$ " . number_format($salario_inicial, 2, ',', '.') . "<br>";
echo "Aumento de 10%: R$ " . number_format($aumento_10, 2, ',', '.') . "<br>";
echo "Desconto de 15%: R$ " . number_format($desconto_15, 2, ',', '.') . "<br>";
echo "Aumento de 40%: R$ " . number_format($aumento_40, 2, ',', '.') . "<br>";

echo "<br>Diferenças entre os salários:<br>";
echo "Diferença entre o aumento de 10% e o salário inicial: R$ " . number_format($diferenca_aumento_10, 2, ',', '.') . "<br>";
echo "Diferença entre o desconto de 15% e o salário inicial: R$ " . number_format($diferenca_desconto_15, 2, ',', '.') . "<br>";
echo "Diferença entre o aumento de 40% e o salário inicial: R$ " . number_format($diferenca_aumento_40, 2, ',', '.') . "<br>";

?>