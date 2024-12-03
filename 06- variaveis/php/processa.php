<?php
//usando variável do tipo Boolean(verdadeira ou falso):
$logado = true;

if ($logado){
echo "Bem vindo ao Painel de controle.";
} else {
echo "Você não está logado. Faça login!.";
}
//===========
echo "<hr>";
//ponto flutuante:
$altura=1.84;
echo "altura: $altura m"; //saída: altura:1.85m
//===========
echo "<hr>";
//Integer
$idade = 17;
echo "idade: $idade";
//========
echo "<hr>";
//Array:
$filhos = [ "João", "Maria", "Pedro", "Ana"];
echo $filhos[1];
//=========
echo "<hr>";
//objeto:
class Pessoa {
public $nome;
public $idade;

public function __construct($nome,$idade) {
$this->nome = $nome;
$this->idade=$idade;

}
public function apresentar(){
    return "Olá, meu nome é $this->nome e tenho $this->idade anos.";
}
}
$pessoa = new Pessoa ("Kezia",16);
echo $pessoa->apresentar();

?>