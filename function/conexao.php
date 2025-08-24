<?php
function conexao(){
    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'dbprojeto';

    try {
        if(!$conexao = mysqli_connect($server, $user, $pass, $db)){
            return null;
        }else{
            return $conexao;
        }
    } catch (Exception $e) {
        return "<p class='alert alert-danger text-center my-5'>Exception: ".$e->getMessage()."</p>";
    }
}
/**Função para executar a instrução sql */
function query($sql){
    return $qr = mysqli_query(conexao(), $sql);
}
/**Função para verificar a quantidade de linha encontradas */
function lines($sql){
    return $lines = mysqli_num_rows($sql);
}
/**Função para listar os dados encontrados */
function data($qr){
    return $data = mysqli_fetch_assoc($qr);
}
?>