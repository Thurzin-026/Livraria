<?php
require_once '../function/conexao.php';
function verificarLogin(){
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        if (empty($email)) {
            echo "
                    <div class='alert alert-danger mt-3'>
                        <p class='lead text-center text-bg-black'>Por favor, digite o e-mail!</p>
                    </div>
                ";
            return;
        }

        if (empty($senha)) {
            echo "
                    <div class='alert alert-danger mt-3'>
                        <p class='lead text-center text-bg-black'>Por favor, digite a senha!</p>
                    </div>
                ";
            return;
        }

        // Verifica se é o admin
        if ($email == 'Admin@gmail.com' && $senha == 'administrador') {
            header('Location: ../pages/admin.php');
            exit;
        }

        // Verifica no banco de dados
        $sql = "SELECT * FROM user WHERE email = '$email' AND senha = '$senha'";
        $resultado = query($sql);
        $dados = data($resultado);

        if ($dados) {
            session_start();
            $_SESSION['user_id'] = $dados['id'];
            $_SESSION['nome'] = $dados['nome'];
            $_SESSION['email'] = $dados['email'];
            header('Location: ../index.php');
            exit;
        } else {
            echo "
                    <div class='alert alert-danger mt-3'>
                        <p class='lead text-center text-bg-black'>Usuário ou senha incorretos!</p>
                    </div>
                ";
        }
    }
}
