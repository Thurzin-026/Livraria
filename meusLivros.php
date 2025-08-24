<?php

session_start();

require_once './function/conexao.php';

// Verifica se o usuário está logado; se não estiver, redireciona para a tela de login

if (!isset($_SESSION['user_id'])) {

  header('Location: formulario/login.php');

  exit;
}

// Obtém o ID do usuário no tipo inteiro e verifica se o id esta logado a partir da sessão

$userId = (int) $_SESSION['user_id'];

$con = conexao();

$sql = "SELECT id, nome FROM produtos WHERE user_id = $userId";

// Executa a consulta no banco

$resultado = mysqli_query($con, $sql);

$contador = 1;

?>

<!DOCTYPE html>

<html lang="pt-BR">

<head>

  <meta charset="UTF-8">

  <title>Meus Livros para Troca</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >

</head>

<body>

  <div class="container my-4">

    <div class="col-12 mb-4 d-flex align-items-center justify-content-between">

      <h1 class="m-0 w-100 text-center">Meus Livros para Troca</h1>

      <a href="index.php" class="btn btn-outline-danger btn-sm px-3">X</a>

    </div>

    <table class="table table-striped table-bordered table-hover">

      <thead class="table-dark">

        <tr>

          <th class="text-center">#</th>

          <th class="text-center">Nome do Livro</th>

          <th class="text-center">Ação</th>

        </tr>

      </thead>

      <tbody>

        <?php

        // Verifica se há livros cadastrados

        if (mysqli_num_rows($resultado) > 0) {

          // Percorre todos os livros retornados e exibe na tabela

          while ($livro = mysqli_fetch_assoc($resultado)) {

            echo "<tr>";

            echo "<td class='text-center'>" . $contador++ . "</td>";

            echo "<td class='text-center'>" . $livro['nome'] . "</td>";

            echo "<td class='text-center'><a href='function/deleteLivro.php?id=" . $livro['id'] . "' class='btn btn-success btn-sm'>Marcar como Trocado</a></td>";

            echo "</tr>";
          }
        } else {

          // Caso o usuário não tenha livros cadastrados

          echo "<tr>";

          echo "<td class='text-center'>-</td>";

          echo "<td class='text-center'>Nenhum livro cadastrado.</td>";

          echo "<td class='text-center'>-</td>";

          echo "</tr>";
        }

        ?>

      </tbody>

    </table>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>