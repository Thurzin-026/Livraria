<?php
require_once './function/conexao.php';

function pegarLivros() {
  $con = conexao();
  $sql = "SELECT * FROM produtos";
  return mysqli_query($con, $sql);
}
?>