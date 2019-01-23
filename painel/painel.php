<?php
include "conexao.php";

function LimparTexto($texto)
{
	$texto=str_replace(array("<", ">", "\\", "/", "=", "'", "?"), "", $texto);
	return $texto;
}
$login = LimparTexto($_POST["login"]);
$senha = LimparTexto($_POST["senha"]);
//acessa ao banco de dados


$resultado = mysql_query("SELECT*FROM login WHERE login = '$login' ");
$linhas = mysql_num_rows($resultado);


if ($linhas == 0)//testa se foi encontrado um registro
{
header("Location: login.php?acao=naoexiste");
} else {
    if ($senha != mysql_result($resultado, 0, "senha"))//confere a senha
    {
     header("Location: login.php?acao=naoexiste");
    }
    else {

    session_start();//iniciando a sessao
    $_SESSION["login"] = $login;
    $_SESSION["senha"] = $senha;

    // redireciona para a pagina principal
    header("Location: administra.php");}
    }

mysql_close($conn);
?>
