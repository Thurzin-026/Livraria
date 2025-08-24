<?php
session_start();
require_once 'conexao.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}

if (isset($_GET['id'])) {
    $idLivro = $_GET['id'];
    $userId = $_SESSION['user_id'];

    // Apaga o livro se ele pertencer ao usuário logado
    $sql = "DELETE FROM produtos WHERE id = $idLivro AND user_id = $userId";
    $result = query($sql);

    header('Location: ../meusLivros.php');
    exit;
} else {
    echo "ID do livro não informado.";
}
