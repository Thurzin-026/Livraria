<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!DOCTYPE html>
  <html lang="pt-br">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tradebook - Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="../Livraria/css/estilo.css" rel="stylesheet">
  </head>

<body>
  <?php require_once './pages/nav.php'; ?>

  <section class="py-5">
    <div class="container">
      <h2 class="text-center display-5 fw-bold mb-4 text-warning">Produtos para Troca</h2>

      <div class="container mb-5">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-10">
            <div class="card shadow-sm border-0 rounded-4 p-4 bg-light">
              <div class="row g-3 align-items-center">
                <!-- Botão cadastrar -->
                <div class="col-md-4 text-md-end text-center">
                  <a href="./pages/cad_produtos.php" class="btn btn-warning text-black fw-bold px-4 w-100 w-md-auto"><i class="bi bi-plus-circle me-2 text-black"></i>Cadastrar novo produto</a>
                </div>
                <!-- Campo de busca -->
                <div class="col-md-8">
                  <form method="GET" action="produtos.php" class="d-flex">
                    <div class="input-group">
                      <span class="input-group-text bg-white border-end-0"><i class="bi bi-search text-black"></i></span>
                      <input type="text" name="busca" class="form-control border-start-0" placeholder="Buscar livros..." value="<?php if (isset($_GET['busca'])) echo $_GET['busca']; ?>" aria-label="Buscar livros">
                      <button class="btn btn-warning fw-bold px-4" type="submit">Buscar</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php
      $contador = 1;
      if (!empty($_GET['busca'])) {
        require_once './function/pesquisar.php';
        $livros = pesqProdutos($_GET['busca']);
      } else {
        require_once './function/pegarLivros.php';
        $livros = pegarLivros();
      }
      ?>

      <div class="row">
        <?php while ($livro = mysqli_fetch_assoc($livros)) {
          $idModal = 'modalLivro' . $contador;
        ?>
          <div class="col-md-4 mt-3">
            <div class="card h-100 border-0 shadow-sm rounded-3">
              <img src="<?php echo $livro['urlImg']; ?>" alt="Imagem do livro" class="img-fluid mb-2 rounded-top-2 h-75" style="max-height: 300px;">
              <div class="card-body d-flex flex-column">
                <span class="text-center my-auto fs-3 mt-2 mb-2"><?php echo $livro['nome']; ?></span>
                <button type="button" class="btn btn-warning mt-auto" data-bs-toggle="modal" data-bs-target="#<?php echo $idModal; ?>">Ver detalhes</button>
              </div>
            </div>
          </div>

          <!-- Modal -->
          <div class="modal fade" id="<?php echo $idModal; ?>" tabindex="-1" aria-labelledby="<?php echo $idModal; ?>Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content bg-dark text-light">
                <div class="modal-header">
                  <h5 class="modal-title" id="<?php echo $idModal; ?>"><?php echo $livro['nome']; ?></h5>
                  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body">
                  <img src="<?php echo $livro['urlImg']; ?>" alt="Imagem do livro" class="img-fluid mb-3 rounded-2">
                  <p>Cidade: <?php echo $livro['cidade']; ?></p>
                  <p>Estado: <?php echo $livro['Estado']; ?></p>
                  <p>Telefone para contato: <a href="https://wa.me/<?php echo $livro['telefone']; ?>" class="text-decoration-none"> <?php echo $livro['telefone']; ?> </a></p>
                  <p>Descrição: <?php echo $livro['descricao']; ?></p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
              </div>
            </div>
          </div>
        <?php
          $contador++;
        }
        ?>
      </div>
    </div>
  </section>
  <?php require_once './pages/footer.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>