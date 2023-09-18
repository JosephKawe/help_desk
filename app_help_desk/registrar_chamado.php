<?php

    session_start();



    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria =str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    $valores = [$_SESSION['id'], $titulo, $categoria, $descricao . PHP_EOL];
    $texto = implode('#', $valores);

    $arquivo = fopen('../../help_desk/arquivo.txt', 'a');


    //abrir arquivo
    fwrite($arquivo, $texto);
    //fechar arquivo
    fclose($arquivo);
    //redirecionar a página
    header('Location: abrir_chamado.php')

?>