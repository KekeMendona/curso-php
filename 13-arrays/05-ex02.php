<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Dados</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffccf5;
            color: #333;
            padding: 20px;
        }
        h2 {
            color: #d5006e;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .grupo {
            margin-bottom: 30px;
        }
        .grupo hr {
            border: 1px solid #d5006e;
        }
        .registro {
            margin-bottom: 15px;
            padding: 10px;
            background-color: #f8f1f9;
            border-radius: 5px;
        }
        .registro b {
            color: #d5006e;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        // Cadastro de Clientes
        $clientes = [
            1 => ['nome' => 'Carlos Silva', 'email' => 'carlos.silva@email.com', 'telefone' => '123456789'],
            2 => ['nome' => 'Maria Oliveira', 'email' => 'maria.oliveira@email.com', 'telefone' => '987654321'],
            3 => ['nome' => 'Ana Souza', 'email' => 'ana.souza@email.com', 'telefone' => '234567890'],
            4 => ['nome' => 'João Pereira', 'email' => 'joao.pereira@email.com', 'telefone' => '345678901'],
            5 => ['nome' => 'Pedro Costa', 'email' => 'pedro.costa@email.com', 'telefone' => '456789012'],
            6 => ['nome' => 'Paula Martins', 'email' => 'paula.martins@email.com', 'telefone' => '567890123'],
            7 => ['nome' => 'Lucas Almeida', 'email' => 'lucas.almeida@email.com', 'telefone' => '678901234'],
            8 => ['nome' => 'Fernanda Ribeiro', 'email' => 'fernanda.ribeiro@email.com', 'telefone' => '789012345'],
            9 => ['nome' => 'Roberto Silva', 'email' => 'roberto.silva@email.com', 'telefone' => '890123456'],
            10 => ['nome' => 'Juliana Costa', 'email' => 'juliana.costa@email.com', 'telefone' => '901234567']
        ];

        // Cadastro de Funcionários
        $funcionarios = [
            1 => ['nome' => 'Carlos Alberto', 'cargo' => 'Gerente', 'salario' => 5000],
            2 => ['nome' => 'Luciana Dias', 'cargo' => 'Assistente', 'salario' => 2500],
            3 => ['nome' => 'Felipe Gomes', 'cargo' => 'Analista', 'salario' => 3500],
            4 => ['nome' => 'Mariana Souza', 'cargo' => 'Coordenadora', 'salario' => 4500],
            5 => ['nome' => 'Thiago Rocha', 'cargo' => 'Assistente', 'salario' => 2200],
            6 => ['nome' => 'Simone Oliveira', 'cargo' => 'Supervisor', 'salario' => 3800],
            7 => ['nome' => 'Ricardo Lima', 'cargo' => 'Diretor', 'salario' => 7000],
            8 => ['nome' => 'Roberta Alves', 'cargo' => 'Estagiária', 'salario' => 1500],
            9 => ['nome' => 'José Pereira', 'cargo' => 'Assistente', 'salario' => 2400],
            10 => ['nome' => 'André Santos', 'cargo' => 'Analista', 'salario' => 3700]
        ];

        // Cadastro de Vendedores
        $vendedores = [
            1 => ['nome' => 'Eduardo Lima', 'meta' => 15000, 'comissao' => 5],
            2 => ['nome' => 'Carla Moreira', 'meta' => 12000, 'comissao' => 6],
            3 => ['nome' => 'Marcos Almeida', 'meta' => 18000, 'comissao' => 4],
            4 => ['nome' => 'Rita Ferreira', 'meta' => 11000, 'comissao' => 7],
            5 => ['nome' => 'Patrícia Costa', 'meta' => 13000, 'comissao' => 5],
            6 => ['nome' => 'Gustavo Martins', 'meta' => 16000, 'comissao' => 6],
            7 => ['nome' => 'Lucas Pereira', 'meta' => 14000, 'comissao' => 6],
            8 => ['nome' => 'Tatiane Silva', 'meta' => 12500, 'comissao' => 7],
            9 => ['nome' => 'Amanda Rocha', 'meta' => 15500, 'comissao' => 5],
            10 => ['nome' => 'Thiago Souza', 'meta' => 13500, 'comissao' => 4]
        ];

        // Cadastro de Sócios
        $socios = [
            1 => ['nome' => 'Carlos Santos', 'participacao' => '30%'],
            2 => ['nome' => 'Fernanda Silva', 'participacao' => '20%'],
            3 => ['nome' => 'José Oliveira', 'participacao' => '15%'],
            4 => ['nome' => 'Ana Costa', 'participacao' => '25%'],
            5 => ['nome' => 'Ricardo Pereira', 'participacao' => '10%'],
            6 => ['nome' => 'Mariana Alves', 'participacao' => '18%'],
            7 => ['nome' => 'Lucas Rocha', 'participacao' => '22%'],
            8 => ['nome' => 'Roberta Souza', 'participacao' => '27%'],
            9 => ['nome' => 'Juliana Martins', 'participacao' => '16%'],
            10 => ['nome' => 'Paulo Silva', 'participacao' => '14%']
        ];

        // Cadastro de Patrocinadores
        $patrocinadores = [
            1 => ['nome' => 'Nike', 'valor' => 100000, 'tipo' => 'Esportes'],
            2 => ['nome' => 'Coca-Cola', 'valor' => 150000, 'tipo' => 'Bebidas'],
            3 => ['nome' => 'Adidas', 'valor' => 120000, 'tipo' => 'Esportes'],
            4 => ['nome' => 'Samsung', 'valor' => 200000, 'tipo' => 'Tecnologia'],
            5 => ['nome' => 'Apple', 'valor' => 250000, 'tipo' => 'Tecnologia'],
            6 => ['nome' => 'Red Bull', 'valor' => 90000, 'tipo' => 'Bebidas'],
            7 => ['nome' => 'Toyota', 'valor' => 180000, 'tipo' => 'Automóveis'],
            8 => ['nome' => 'Itaú', 'valor' => 220000, 'tipo' => 'Financeiro'],
            9 => ['nome' => 'Bradesco', 'valor' => 170000, 'tipo' => 'Financeiro'],
            10 => ['nome' => 'Ambev', 'valor' => 130000, 'tipo' => 'Bebidas']
        ];

        // Função para exibir os dados de cada grupo
        function exibirDados($grupo, $nomeGrupo) {
            echo "<div class='grupo'><h2>Cadastro de {$nomeGrupo}</h2>";
            foreach ($grupo as $id => $dados) {
                echo "<div class='registro'><b>Registro #{$id}</b><br>";
                foreach ($dados as $campo => $valor) {
                    echo ucfirst($campo) . ": " . $valor . "<br>";
                }
                echo "</div><hr>";
            }
            echo "</div>";
        }

        // Exibir todos os cadastros
        exibirDados($clientes, 'Clientes');
        exibirDados($funcionarios, 'Funcionários');
        exibirDados($vendedores, 'Vendedores');
        exibirDados($socios, 'Sócios');
        exibirDados($patrocinadores, 'Patrocinadores');
        ?>
    </div>
</body>
</html>
