<?php
$nome = $_POST ['nome'];
$tipo = $_POST ['tipo'];
$nomeDoArquivo = $_FILES ['foto']['name'];

// inicio do upload 

$nomeDoArquivo = $_FILES ['foto']['name'];
$partes = explode(".",$nomeDoArquivo);
$nomeNovo = round(microtime(true)) . "." . end ($partes);
$pasta = "img/";
move_uploaded_file($_FILES ['foto']['tmp_name'], $pasta . $nomeNovo);

// fim do upload
?>