<?php
/**Função que alterna as páginas*/
function pages(){
    $page = filter_input(INPUT_GET, 'tela', FILTER_SANITIZE_URL);
    // Verifica se existe a url
    $page = (!$page) ? "../tela/home.php" : "../tela/{$page}.php";
    if(!file_exists($page)){
        throw new \Exception("<p class='alert alert-danger text-center my-5'>A página não existe!</p>");
    }
    return $page;
}