<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Livro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <div class="container mt-5">
      <div class="card shadow mx-auto" style="max-width: 600px;">
        <div class="card-body">
          <div class="row py-2">
            <h2 class="col card-title text-start">Cadastro de Livro</h2>
            <div class="col text-end">
              <a href="../produtos.php" class="link-dark link-underline link-underline-opacity-0 link-opacity-50-hover"><i class="bi bi-x fs-3"></i></a>
            </div>
          </div>
          <form action="" method="POST" enctype="multipart/form-data">
            <div class="mt-3 mb-3">
              <label for="imagem" class="form-label">Imagem do Livro</label>
              <input type="file" class="form-control" id="imagem" name="imagem" accept="image/*">
            </div>
            <div class="mb-3">
              <label for="nomeLivro" class="form-label">Nome do Livro</label>
              <input type="text" class="form-control" id="nomeLivro" name="nomeLivro" placeholder="Digite o nome do livro">
            </div>
            <div class="mb-3">
              <label for="cidade" class="form-label">Cidade</label>
              <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Digite sua cidade">
            </div>
            <div class="mb-3">
              <label for="estado" class="form-label">Estado</label>
              <input type="text" class="form-control" id="estado" name="estado" placeholder="Digite seu estado">
            </div>
            <div class="mb-4">
              <label for="telefone" class="form-label">Telefone para Contato</label>
              <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="ex: 5511987654321">
            </div>
            <div class="mb-4">
              <label for="descricao" class="form-label">Descrição</label>
              <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Escreva a descrição">
            </div>
            <button type="submit" class="btn btn-success w-100">Cadastrar Livro</button>
          </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
<?php
  require_once '../function/cadProdutos.php';
  cadastrarProdutos();
?>