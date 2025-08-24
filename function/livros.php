<?php
require_once './function/conexao.php';
$con = conexao();
if (!empty($_GET['busca'])) {
    $busca = $_GET['busca'];
    $sql = "SELECT * FROM produtos WHERE nome LIKE '%$busca%'";
}
$sql = "SELECT * FROM produtos";
$resultado = mysqli_query($con, $sql);