<?php
function upload($arquivo, $pasta) {
  if ($arquivo['error'] !== 0) {
    return false; // erro no upload
  }

  $nome = $arquivo['name'];
  $tmp = $arquivo['tmp_name'];
  $ext = strtolower(pathinfo($nome, PATHINFO_EXTENSION));

  if ($ext != 'jpg' && $ext != 'jpeg' && $ext != 'png') {
    return false; // formato não aceito
  }

  $novoNome = uniqid() . '.' . $ext;
  $pastaDestino = __DIR__ . "/../image/$pasta/";

  if (!file_exists($pastaDestino)) {
    mkdir($pastaDestino, 0777, true);
  }

  $caminhoFinal = $pastaDestino . $novoNome;

  if (move_uploaded_file($tmp, $caminhoFinal)) {
    return "image/$pasta/$novoNome";
  }

  return false;
}
