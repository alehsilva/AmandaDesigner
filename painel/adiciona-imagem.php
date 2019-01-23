<!DOCTYPE html>

<?php
error_reporting(0);
session_start();
if(!$_SESSION["login"] and !$_SESSION["senha"]){
  header('Location: login.php');
  session_destroy();
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form name="adicionaimagem" action="envia-imagem.php" method="post">
      <label for="titulo" >Título</label>
      <input type="text" name="titulo"><br/><br/>
      <label for="imagem">Imagem</label>
      <input type="file" name="imagem"><br/><br/>
      <label for="imagem">Tipo do trabalho</label>
      <input type="text" name="tipo"><br/><br/>
      <label for="resumo">Resumo do trabalho</label>
      <textarea name="resumo" rows="8" cols="80"></textarea><br/><br/>
      <input type="submit" name="botao" value="Enviar">
    </form>
  </body>
</html>
