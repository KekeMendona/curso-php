<?php
session_start();

// Inicializando a agenda na sessão
if (!isset($_SESSION['agenda'])) {
    $_SESSION['agenda'] = [];
}

// Adicionando evento ao clicar no botão "Adicionar Evento"
if (isset($_POST['add_event'])) {
    $data_evento = $_POST['data_evento'];
    $descricao_evento = $_POST['descricao_evento'];

    // Adicionando evento à agenda
    $_SESSION['agenda'][] = ['data' => $data_evento, 'descricao' => $descricao_evento];
}

// Excluindo evento ao clicar no botão "Excluir"
if (isset($_GET['excluir'])) {
    $id_evento = $_GET['excluir'];
    unset($_SESSION['agenda'][$id_evento]);
    $_SESSION['agenda'] = array_values($_SESSION['agenda']); // Reindexando o array
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Pessoal</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <header>
        <h1>Minha Agenda Pessoal</h1>
    </header>

    <main>
        <div class="form-container">
            <h2>Adicionar Novo Evento</h2>
            <form method="POST" action="">
                <label for="data_evento">Data do Evento:</label>
                <input type="date" name="data_evento" required>

                <label for="descricao_evento">Descrição:</label>
                <input type="text" name="descricao_evento" required>

                <button type="submit" name="add_event">Adicionar Evento</button>
            </form>
        </div>

        <div class="agenda-container">
            <h2>Agenda</h2>
            <?php if (empty($_SESSION['agenda'])): ?>
                <p>Nenhum evento adicionado ainda.</p>
            <?php else: ?>
                <ul>
                    <?php
                    $i = 0;
                    while ($i < count($_SESSION['agenda'])) {
                        $evento = $_SESSION['agenda'][$i];
                        echo "<li>";
                        echo "<strong>" . date("d/m/Y", strtotime($evento['data'])) . "</strong>: " . $evento['descricao'];
                        echo " <a href='?excluir=$i' class='excluir'>[Excluir]</a>";
                        echo "</li>";
                        $i++;
                    }
                    ?>
                </ul>
            <?php endif; ?>
        </div>
    </main>

</body>
</html>
