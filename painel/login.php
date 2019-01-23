<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="estilo.css">
    <title>Painel</title>
  </head>
  <body>
    <form class="formulario" action="painel.php" method="post">
      <label for="login">Login</label>
      <input type="text" name="login" ><br/><br/>
      <label for="senha">Senha</label>
      <input type="password" name="senha" ><br/><br/>
      <input type="submit" name="botao" value="Entrar">
      <?php
    error_reporting(0);

    if ($acao = $_GET['acao'] == 'naoexiste'){
      echo "Dados Inválidos";
    }

       ?>
    </form>
  </body>
</html>
