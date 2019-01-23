<?php
$sc = fopen("banco-dados.php", "r");
$size = filesize('banco-dados.php') + 1;
$wiersz = fread($sc, $size);
$sc = explode('|', $wiersz);
$use = 'root';
$sen = 'usbw';
$ban = 'amandadesigner';
?>
<?php
            $host = "localhost";
            $usuario = "$use";
            $senha = "$sen";
            $banco = "$ban";
            $conecta = mysql_connect($host,$usuario,$senha) or die("N�o Foi Possível Conectar");
            $seleciona = mysql_select_db($banco) or die("Não Foi Encontrado o Respectivo Banco De Dados");
?>
