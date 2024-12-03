<?php
include 'config.php';

// Consulta para pegar todos os clientes
$result = $conn->query("SELECT * FROM clientes"); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Clientes - Padaria Toque de Arte :)</title>
  
  <style>
    /* Reset básico */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Arial', sans-serif;
      background-color: #f7f7f7;
      color: #333;
      line-height: 1.6;
    }

    .container {
      width: 90%;
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }

    header {
      text-align: center;
      margin-bottom: 30px;
      padding-bottom: 15px;
      border-bottom: 2px solid #4CAF50;
    }

    h1 {
      font-size: 2.5em;
      color: #4CAF50;
      margin-bottom: 10px;
    }

    a.btn {
      text-decoration: none;
      padding: 12px 20px;
      margin-top: 20px;
      border-radius: 5px;
      font-size: 1.1em;
      display: inline-block;
      background-color: #4CAF50;
      color: white;
      text-align: center;
      transition: background-color 0.3s ease;
    }

    a.btn:hover {
      background-color: #45a049;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background-color: #fff;
      border-radius: 8px;
      overflow: hidden;
      margin-top: 20px;
    }

    th, td {
      padding: 15px;
      text-align: left;
    }

    th {
      background-color: #4CAF50;
      color: white;
      font-size: 1.1em;
    }

    td {
      border-bottom: 1px solid #ddd;
    }

    tr:hover {
      background-color: #f1f1f1;
    }

    td a {
      text-decoration: none;
      padding: 8px 16px;
      border-radius: 5px;
      margin-right: 10px;
      font-weight: bold;
      transition: background-color 0.3s ease;
    }

    .btn-edit {
      background-color: #FF9800;
      color: white;
    }

    .btn-edit:hover {
      background-color: #e68900;
    }

    .btn-delete {
      background-color: #F44336;
      color: white;
    }

    .btn-delete:hover {
      background-color: #d32f2f;
    }

    /* Responsividade */
    @media (max-width: 768px) {
      table, thead, tbody, th, td, tr {
        display: block;
        width: 100%;
      }

      th {
        text-align: left;
        font-size: 1em;
      }

      td {
        text-align: left;
        padding: 10px;
      }

      .btn {
        width: 100%;
        margin-top: 10px;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <header>
      <h1>Lista de Clientes - Toque de Arte :)</h1>
      <a href="add.php" class="btn">Criar Cliente</a>
    </header>

    <main>
      <table>
        <thead>
          <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Sexo</th>
            <th>Bairro</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
              <td><?= htmlspecialchars($row['nome']); ?></td>
              <td><?= htmlspecialchars($row['email']); ?></td>
              <td><?= htmlspecialchars($row['sexo']); ?></td>
              <td><?= htmlspecialchars($row['bairro']); ?></td>
              <td>
                <a href="edit.php?id=<?= $row['id']; ?>" class="btn-edit">Editar</a>
                <a href="delete.php?id=<?= $row['id']; ?>" class="btn-delete" onclick="return confirm('Tem certeza que deseja apagar este cliente?')">Deletar</a>
              </td>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </main>
  </div>
</body>
</html>
