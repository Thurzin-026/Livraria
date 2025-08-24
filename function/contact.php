<?php
require_once 'manipularDados.php';

function contato() {
    $sql = "SELECT telefone, whatsapp, email FROM contato LIMIT 1";
    $qr = query($sql);

    if (lines($qr) > 0) {
        return data($qr);
    }
}
?>
