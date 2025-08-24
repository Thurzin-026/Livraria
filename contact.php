<?php
require_once './function/contact.php';
$contato = contato();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Tradebook - Contato</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <link rel="stylesheet" href="./css/estilo.css">
</head>
<body>

  <!-- Navbar -->
  <?php require_once './pages/nav.php' ?>

  <!-- Contato -->
  <section class="py-5">
    <div class="container">
      <h2 class="text-center display-5 fw-bold mb-5 text-warning">Contato</h2>

      <div class="row justify-content-center g-4">
        <div class="col-md-6">
          <div class="card border-0 shadow-sm p-4">
            <h4 class="fw-bold mb-4 text-center">Fale conosco</h4>

            <p class="fs-5">
              <i class="bi bi-telephone-fill me-2 text-warning"></i>
              Telefone: <?php echo $contato['telefone'] ?>
            </p>
            <p class="fs-5">
              <i class="bi bi-whatsapp me-2 text-warning"></i>
              WhatsApp: 
              <a href="https://wa.me/<?php echo $contato['whatsapp'] ?>" class="text-decoration-none">
                <?php echo $contato['whatsapp'] ?>
              </a>
            </p>
            <p class="fs-5">
              <i class="bi bi-envelope-fill me-2 text-warning"></i>
              Email: <?php echo $contato['email'] ?>
            </p>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <?php require_once './pages/footer.php' ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
