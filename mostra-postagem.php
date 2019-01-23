<?php
include ("conexao.php");

$id = $_GET['id'];

$sql = "SELECT * FROM postagem WHERE id='$id'";

$resultados = mysql_query($sql) //Executando consulta
or die (mysql_error()); //Se ocorrer erro mostre-o
if (@mysql_num_rows($resultados) == 0) //Se não retornar nada
echo("Nenhum cadastro encontrado");

while ($res=mysql_fetch_array($resultados)) {
echo "<img src='galeria/".$res['imagem']."' alt='Galeria'>";
} //laço para listagem de itens
?>
