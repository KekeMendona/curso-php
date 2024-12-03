<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Senhas Fortes</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #4facfe, #00f2fe);
            color: white;
            text-align: center;
            padding: 50px;
        }
        h1 {
            font-size: 3em;
            margin-bottom: 20px;
        }
        .container {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 10px;
            display: inline-block;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }
        input, button {
            padding: 10px;
            font-size: 1.2em;
            margin-top: 10px;
        }
        input[type="number"], input[type="text"] {
            width: 250px;
        }
        .password {
            margin-top: 20px;
            font-size: 1.5em;
            color: #32CD32; /* Verde vibrante para a senha gerada */
        }
        .download-btn {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 1.2em;
            background-color: #32CD32;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .download-btn:hover {
            background-color: #228B22;
        }
        .info {
            color: yellow;
            font-size: 1.2em;
        }
    </style>
</head>
<body>

    <h1>Gerador de Senhas Fortes</h1>
    
    <div class="container">
        <form method="POST">
            <label for="length">Digite o comprimento da senha:</label><br>
            <input type="number" id="length" name="length" min="8" max="32" required><br><br>
            <button type="submit">Gerar Senha</button>
        </form>

        <div class="password">
            <?php
                // Função para gerar uma senha forte
                function generate_password($length) {
                    // Caracteres possíveis para a senha
                    $upper = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                    $lower = 'abcdefghijklmnopqrstuvwxyz';
                    $numbers = '0123456789';
                    $special = '!@#$%^&*()-_+=<>?';
                    
                    // Combina todas as opções de caracteres
                    $characters = $upper . $lower . $numbers . $special;
                    
                    // Inicializa a senha
                    $password = '';
                    
                    // Gera a senha usando um laço while
                    $i = 0;
                    while ($i < $length) {
                        // Escolhe aleatoriamente um caractere
                        $password .= $characters[random_int(0, strlen($characters) - 1)];
                        $i++;
                    }
                    
                    return $password;
                }

                // Verificando a entrada do usuário e gerando a senha
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $length = intval($_POST['length']);
                    if ($length < 8 || $length > 32) {
                        echo "<p class='info'>Por favor, insira um valor entre 8 e 32 para o comprimento da senha.</p>";
                    } else {
                        $generated_password = generate_password($length);
                        echo "<p>A senha gerada é: <strong>$generated_password</strong></p>";
                        // Criação do arquivo para download
                        $file_name = "senha_gerada.txt";
                        file_put_contents($file_name, $generated_password);

                        // Botão de download
                        echo "<a href='$file_name' download><button class='download-btn'>Baixar Senha</button></a>";
                    }
                }
            ?>
        </div>
    </div>

</body>
</html>
