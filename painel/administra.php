<!DOCTYPE html>
<?php
error_reporting(0);
session_start();
if(!$_SESSION["login"] and !$_SESSION["senha"]){
  header('Location: login.php');
  session_destroy();
}
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Painel administrativo</title>
  </head>
  <body>
    <div class="menu">
      <ul>
        <a href="#"><li>Inicio</li></a>
        <a href="adiciona-imagem.php" target="player"><li>Adicionar imagem</li></a>
        <a href="login.php"><li>Sair</li></a>
      </ul>
    </div>

    <iframe name="player" src="" width="50%"  height="500px"></iframe>

  </body>
</html>
