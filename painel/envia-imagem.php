<?php
include ("conexao.php");

$titulo = $_POST['titulo'];
$resumo = $_POST['resumo'];
$imagem = $_POST['imagem'];
$tipo = $_POST['tipo'];

$insert = "INSERT INTO postagem ( titulo, imagem, resumo, data, tipo) VALUES ('$titulo', '$imagem', '$resumo','','$tipo')";
$resultado = mysql_query($insert) or die ("nao foi possivel inserir");



?>
