<?php
require_once 'pesquisar.php';

$busca = $_GET['busca'];
$livros = pesqProdutos($busca);
$contador = 1;
?>

<div class="row">
  <?php while ($livro = mysqli_fetch_assoc($livros)) {
    // O ponto (.) é o operador de concatenação que une strings em PHP
    $idModal = 'modal' . $contador;
  ?>

    <div class="col-md-4">
      <div class="card p-2 mb-3">
        <img src="<?php echo $livro['urlImg'] ?>" class="img-fluid" alt="Livro">
        <h5><?php echo $livro['nome'] ?></h5>
        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#<?php echo $idModal ?>">Detalhes</button>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="<?php echo $idModal ?>" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title"><?php echo $livro['nome'] ?></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
          </div>
          <div class="modal-body">
            <img src="<?php echo $livro['urlImg'] ?>" class="img-fluid mb-2" alt="Livro">
            <p>Cidade: <?php echo $livro['cidade'] ?></p>
            <p>Estado: <?php echo $livro['Estado'] ?></p>
            <p>Telefone: <?php echo $livro['telefone'] ?></p>
            <p>Descrição: <?php echo $livro['descricao'] ?></p>
          </div>
        </div>
      </div>
    </div>

  <?php
    $contador++;
  }
  ?>
</div>