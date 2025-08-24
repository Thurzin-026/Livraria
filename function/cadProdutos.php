<?php
session_start();
require_once '../function/manipularDados.php';
require_once '../function/upload.php';
function cadastrarProdutos()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = $_POST['nomeLivro'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $telefone = $_POST['telefone'];
        $descricao = $_POST['descricao'];
        $user_id = $_SESSION['user_id'];
        // envia essa imagem para a pasta ‘produtos’ 
        $imagemUrl = upload($_FILES['imagem'], "produtos");

        if (empty($nome) || empty($cidade) || empty($estado) || empty($telefone) || empty($descricao) || empty($imagemUrl) || empty($user_id)) {
            echo "
            <div class='alert alert-danger w-50 mx-auto mt-3'>
                <p class='lead text-center text-bg-black'>Preencha tudo e envie uma imagem!</p>
            </div>";
        } else {

            $tabela = 'produtos';
            $campos = "urlImg, nome, cidade, Estado, telefone, descricao, user_id";
            $valores = "'$imagemUrl', '$nome', '$cidade', '$estado', '$telefone', '$descricao', '$user_id'";

            if (inserir($tabela, $campos, $valores)) {
                echo "
            <div class='alert alert-success w-50 mx-auto mt-3'>
                <p class='lead text-center text-bg-black'>Livro cadastrado com sucesso!</p>
            </div>";
            } else {
                echo "
            <div class='alert alert-danger w-50 mx-auto mt-3'>
                <p class='lead text-center text-bg-black'>Erro ao cadastrar o livro!</p>
            </div>";
            }
        }
    }
}
