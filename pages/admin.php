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
    <div class="card shadow mx-auto" style="max-width: 700px;">
      <div class="card-body">
      <div class="row py-2">
      <h2 class="col card-title text-start fs-6">Atualizar Informações de Contato</h2>
      <div class="col text-end"><a href="../formulario/login.php" class="link-dark link-underline link-underline-opacity-0 link-opacity-50-hover "><i class="bi bi-x fs-5"></i></a></div>

          <form action="#" method="POST">
          <!-- Telefone -->
          <div class="mb-4">
            <label for="telefone" class="form-label mt-3">Telefone</label>
            <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="ex: (55) 11 91234-5678">
          </div>

          <!-- whatsapp -->
          <div class="mb-4">
            <label for="whatsapp" class="form-label">Telefone whatsapp</label>
            <input type="tel" class="form-control" id="whatsapp" name="whatsapp" placeholder="ex: 551187654321">
          </div>

          <!-- Email -->
          <div class="mb-4">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="ex: exemplo@gmail.com">
          </div>
          
          <button type="submit" class="btn btn-success w-100">Atualizar</button>
        </form>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
require_once '../function/contato.php';
contact();
?>