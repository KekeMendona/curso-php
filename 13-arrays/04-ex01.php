<?php

//Criando um array com 20 elementos (nomes de cidades)
$cities = [
    "São Paulo", "Rio de Janeiro", "Belo Horizonte",  "Brasilia", "Curitiba",
    "Salvador", "Forteleza", "Porto Alegre", "Manaus", "Recife",
    "belem", "Florianopolis", "Goiãnia", "Campo Grande", "Natal",
    "João Pessoa", "Maceio", "Aracaju", "Vitoria", "Cuiaba"
];
//Pecorrendo o array e exibindo o indice e o valor de cada elemento
foreach ($cities as $index => $city) {
    if (strpos($city, "G")===0)

    echo "$city<br>";
}