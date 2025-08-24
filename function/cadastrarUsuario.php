<?php
require_once '../function/manipularDados.php';
function cadastrarUsuario()
{
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_start();
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $tabela = 'user';
    $campos = "nome, email, senha";
    $campoId = "email";
    $valorId = "'$email'";

    if (empty($nome) || empty($email) || empty($senha)) {
      echo "<div class='alert alert-danger mt-3'>
              <p class='lead text-center text-bg-black'>Preencha os campos!</p>
            </div>";
    } else if (ifExiste($tabela, $campoId, $valorId) == 1) {
      echo "<div class='alert alert-danger w-100 py-1'>
              <p class='lead text-center text-bg-black'>O usuário já existe!</p>
            </div>";
    } else {
      $con = conexao();
      $sql = "INSERT INTO $tabela ($campos) VALUES ('$nome', '$email', '$senha')";
      $resultado = mysqli_query($con, $sql);
      if ($resultado) {
        // Me dá o número do último registro que eu acabei de colocar no banco usando essa conexão
        $user_id = mysqli_insert_id($con);
        // Guarda o ID na sessão
        $_SESSION['user_id'] = $user_id;
        header('Location: ../index.php');
        exit();
      } else {
        echo "Erro ao cadastrar usuário.";
      }
    }
  }
}
