<?php
require_once '../function/manipularDados.php';

function contact() {
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tel = $_POST['telefone'];
    $zap = $_POST['whatsapp'];
    $email = $_POST['email'];

    if (empty($tel) || empty($zap) || empty($email)) {
      echo "<div class='alert alert-danger mt-3'>
              <p class='lead text-center text-bg-black'>Preencha todos os campos!</p>
            </div>";
    } else {
      $sql = "UPDATE contato SET telefone='$tel', whatsapp='$zap', email='$email' LIMIT 1";
      if (query($sql)) {
        echo "<div class='alert alert-success mt-3'>
                <p class='lead text-center text-bg-black'>Dados atualizados com sucesso!</p>
              </div>";
      } else {
        echo "<div class='alert alert-danger mt-3'>
                <p class='lead text-center text-bg-black'>Erro ao atualizar os dados!</p>
              </div>";
      }
    }
  }
}
