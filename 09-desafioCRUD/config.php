<?php
//Criando as variáveis de ambiente para se conectar no BD:
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "padariata";
//Criando a conexao com o banco o banco de dados usando a classe mysqli
$conn = new mysqli($servername, $username, $password, $dbname);
//verificando se a conexão deu certo:
    if ($conn->connect_error) {
        die ("Conexão falhou: ".$conn->connect_error);
    }

?>