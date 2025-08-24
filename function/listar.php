<?php
require_once '../function/manipularDados.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    /**Receber o dado a ser procurado */
    $search = $_POST['search'];
    try {
        $sql = "SELECT * FROM produtos  WHERE nome LIKE '%$search%'";
        if (!$conn = conexao()) {
            echo "Erro de conexão ao procurar um livro!";
            return null;
        }
        $qr = mysqli_query($conn, $sql);
        $contador = 0;
        while ($dados = mysqli_fetch_assoc($qr)) {
            $contador++;
            echo "
                <tr>
                  <td>" . $dados['nome'] . "</td>
                  <td>" . require './pegarLivros.php' . "</td>
                </tr>
                ";
        }
    } catch (Exception $e) {
        echo "Erro de SQL: " . $e->getMessage();
    }
}
