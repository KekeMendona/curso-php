<!DOCTYPE html>
<!-- Definimos que o documento HTML está na versão 5 -->
<html lang="pt-BR">
<!-- Definimos o início do documento HTML e o idioma (português brasileiro) -->

<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8"> <!-- Define o conjunto de caracteres para o documento -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Para adaptar o conteúdo à tela do usuário -->
    <meta name="description" content="Exemplo de descrição"> <!-- Descrição da página -->
    <meta name="robots" content="noindex, nofollow"> <!-- Impede a página de aparecer nos resultados de busca e não segue links -->
    <meta name="robots" content="noindex"> <!-- Para impedir indexação -->
    
    <title>Exemplo de Página</title> <!-- Define o título da página -->
</head>

<body>
    <!-- Corpo da página -->
    <h1>Exemplo de Título</h1>
    <p>Este é um exemplo de um parágrafo.</p>

    <!-- Link para uma página externa -->
    <a href="https://lista.marcadolivre.com.br" target="_blank">Clique aqui para o Mercado Livre</a>

    <!-- Link para iniciar uma chamada telefônica -->
    <a href="tel:119999999">Ligar</a>

    <!-- Link para abrir o aplicativo de e-mail -->
    <a href="mailto:sopote@gmail.com">Enviar e-mail</a>

    <!-- Exibindo uma imagem -->
    <img src="exemplo.jpg" alt="Descrição da imagem" width="300" height="200">

    <!-- Agrupando elementos -->
    <div id="segundo-produto">
        <h2>Produto Exemplo</h2>
        <p>Descrição do produto.</p>
    </div>
</body>

</html>
/* Definindo as cores e fontes */

h1 {
    color: blue; /* Cor azul */
    background-color: #0000ff; /* Cor de fundo azul */
    font-size: 24px; /* Tamanho da fonte */
    font-family: Arial, sans-serif; /* Família de fontes */
    font-weight: bold; /* Fonte em negrito */
    text-align: center; /* Alinhamento do texto ao centro */
    margin: 20px; /* Espaçamento externo */
    padding: 10px; /* Espaçamento interno */
}

/* Exemplo de definição de borda */
div {
    border: 2px solid #000; /* Borda preta de 2px */
    padding: 15px;
    margin: 10px;
}

/* Exemplo de fundo e cor de texto com RGB */
p {
    color: rgb(255, 0, 0); /* Texto em vermelho */
    background-color: rgb(0, 0, 255); /* Fundo azul */
}

/* Definindo margem e padding em vários lados */
.container {
    margin: 20px auto; /* Margin automática nas laterais para centralizar */
    padding: 20px 30px 40px 50px; /* Padding: superior, direita, inferior, esquerda */
}
