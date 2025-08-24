<?php
require_once './function/conexao.php';
// Função para pesquisar produtos
function pesqProdutos($busca) {
  $con = conexao();
  // Verifica se a busca está vazia
  if (empty($busca)){
    // Se vazia, seleciona todos os produtos
    $sql = "SELECT * FROM produtos";
  } else {
    // Se não, seleciona os produtos cujo nome contenha o texto buscado
    $sql = "SELECT * FROM produtos WHERE nome LIKE '%$busca%'";
  }
  // Executa a consulta no banco e retorna o resultado
  return mysqli_query($con, $sql);
}
?>
