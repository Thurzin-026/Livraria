<?php
require_once 'conexao.php';
/**Função para inserir dados */
function inserir($tabela, $campos, $valores){

    try {
        $sql = "INSERT INTO $tabela ($campos) VALUES ($valores)";
        return query($sql) ? "Cadastro realizado com sucesso!" : "Erro ao cadastrar!";
    } catch (Exception $e) {
        return "Erro de SQL: {$e->getMessage()}";
    }
}
/**Função para apagar dados */
function deletar($tabela, $campoId, $valorId){
    try {
        $sql = "DELETE FROM $tabela WHERE $campoId = $valorId";
        return (query($sql)) ? "Dado apagado com sucesso!" : "Não foi possível apagar o dado!";
    } catch (Exception $e) {
        return "Erro de SQL: {$e->getMessage()}";
    }
}
/**Função para atualizar dado */
function update($tabela, $valor, $campoId, $valorId){
    try {
        $sql = "UPDATE $tabela SET $valor WHERE $campoId = $valorId";
        return query($sql) ? "Dados atualizados com sucesso" : "Erro ao atualizar os dados!";
    } catch (Exception $e) {
        return "Erro de SQL: {$e->getMessage()}";
    }
}

/**Função para verificar se o dado existe no banco */
function ifExiste($tabela, $campoId, $valorId){
    try {
        $sql = "SELECT $campoId FROM $tabela WHERE $campoId = $valorId";
        $query = query($sql);
        $resultado = mysqli_num_rows($query);
        return $resultado;
    } catch (Exception $e) {
        return "Erro de SQL: {$e->getMessage()}";
    }
}