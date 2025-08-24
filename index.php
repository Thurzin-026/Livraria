<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: ./formulario/login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tradebook - Início</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="../Livraria/css/estilo.css" rel="stylesheet">
</head>
<body>

  <!-- Navbar -->
  <?php require_once './pages/nav.php' ?>

  <!-- Sobre o Site -->
  <section class="py-5">
    <div class="container">
      <h2 class="text-center display-5 fw-bold mb-5 text-warning">Sobre o Tradebook</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card h-100 border-0 shadow-sm">
            <div class="card-body text-center">
              <i class="bi bi-info-circle display-3 mb-3"></i>
              <h5 class="card-title fw-bold fs-4">O que é?</h5>
              <p class="card-text fs-5">Uma plataforma onde leitores trocam livros parados na estante. Simples, gratuito e sustentável!</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100 border-0 shadow-sm">
            <div class="card-body text-center">
              <i class="bi bi-lightbulb display-3 mb-3"></i>
              <h5 class="card-title fw-bold fs-4">Nosso propósito</h5>
              <p class="card-text fs-5">Acreditamos que a leitura conecta pessoas e transforma vidas. Economize dinheiro e conheça novas histórias.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100 border-0 shadow-sm">
            <div class="card-body text-center">
              <i class="bi bi-gear display-3 mb-3"></i>
              <h5 class="card-title fw-bold fs-4">Como funciona?</h5>
              <p class="card-text fs-5">Cadastre seu livro, veja opções de troca e converse via WhatsApp para combinar tudo de forma segura.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Benefícios -->
  <section class="py-5">
    <div class="container">
      <h2 class="text-center display-5 fw-bold mb-5 text-warning">Por que escolher o Tradebook?</h2>
      <div class="row g-4">
        <div class="col-md-4 text-center">
          <i class="bi bi-people-fill display-3 mb-2"></i>
          <h5 class="fw-bold fs-4">Comunidade</h5>
          <p class="fs-5">Conheça pessoas apaixonadas por leitura e compartilhe experiências literárias.</p>
        </div>
        <div class="col-md-4 text-center">
          <i class="bi bi-wallet2 display-3 mb-2"></i>
          <h5 class="fw-bold fs-4">Economia</h5>
          <p class="fs-5">Troque livros em vez de comprar novos. Economia garantida!</p>
        </div>
        <div class="col-md-4 text-center">
          <i class="bi bi-recycle display-3 mb-2"></i>
          <h5 class="fw-bold fs-4">Sustentável</h5>
          <p class="fs-5">Reaproveite livros e contribua para um planeta mais verde.</p>
        </div>
        <div class="col-md-4 text-center">
          <i class="bi bi-whatsapp display-3 mb-2"></i>
          <h5 class="fw-bold fs-4">Facilidade</h5>
          <p class="fs-5">Negocie direto pelo WhatsApp de forma simples e segura.</p>
        </div>
        <div class="col-md-4 text-center">
          <i class="bi bi-star-fill display-3 mb-2"></i>
          <h5 class="fw-bold fs-4">Variedade</h5>
          <p class="fs-5">Explore diversos gêneros literários e encontre novos autores.</p>
        </div>
        <div class="col-md-4 text-center">
          <i class="bi bi-heart-fill display-3 mb-2"></i>
          <h5 class="fw-bold fs-4">Paixão</h5>
          <p class="fs-5">Para quem ama leitura e quer espalhar conhecimento e cultura.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php require_once './pages/footer.php' ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>