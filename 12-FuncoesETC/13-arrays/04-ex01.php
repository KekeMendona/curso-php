<?php
$estoque = [
"Arroz" => 10,
"Feijão" => 0,
"Batata" => 5,
"Macarrão" => 2
];
foreach ($estoque as $produto => $quantidade) {
if ($quantidade > 5) {
echo "Produto $produto em estoque suficiente: $quantidade.<br>";
} elseif ($quantidade > 0) {
echo "Produto $produto em estoque baixo: $quantidade.<br>";
} else {
echo "Produto $produto está fora de estoque!<br>";
}
}

// Criando um array com 20 elementos (nomes de cidades)
$cities = [
"são Paulo", "Rio de Janeiro", "Belo Horizonte", "Brasília", "Curitiba",
"salvador", "Fortaleza" , "Porto Alegre", "Manaus", "Recife",
"Belém", "Florianópolis", "Goiânia", "Campo Grande", "Natal",
"João Pessoa", "Maceió", "Aracaju", "vitória", "Cuiabá"

//Percorrendo o array e exibindo o indice e o valor de cada elemento
 foreach ($cities as $index => $city) {
echo "índice $index: $city<br>";
}