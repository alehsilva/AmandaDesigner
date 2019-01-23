<?php

      include ("conexao.php");


      $sql_res=mysql_query("SELECT * FROM postagem"); //consulta no banco
    	$contador=mysql_num_rows($sql_res); //Pegando Quantidade de itens
    	//Verificando se já selecionada alguma página
    	if(empty($_GET['pag'])){
    		$pag=1;
    	}else{
    		$pag = "$_GET[pag]";} //Pegando página selecionada na URL
    	if($pag >= '1'){
     		$pag = $pag;
    	}else{
    		$pag = '1';
    	}
    	$maximo=12; //Quantidade Máxima de posts por página
    	$inicio = ($pag * $maximo) - $maximo; //Variável para LIMIT da sql
    	$paginas=ceil($contador/$maximo);	//Quantidade de páginas

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Paginador</title>
    <meta name="description" content="">
    <link rel="stylesheet" href="galeria.css">

</head>
<body>
   <?php
  
  	echo "<b>Página ".$pag." de ".$paginas."</b>"; //Informando qual é a página atual
    ?>

    <?php
      	$sql="SELECT * FROM postagem ORDER BY id LIMIT $inicio, $maximo"; //consulta no BD
      	$resultados = mysql_query($sql) //Executando consulta
      	or die (mysql_error()); //Se ocorrer erro mostre-o
      	if (@mysql_num_rows($resultados) == 0) //Se não retornar nada
      	echo("Nenhum cadastro encontrado");
        echo "<div class='corpo'>";
      	while ($res=mysql_fetch_array($resultados)) { //laço para listagem de itens
    ?>

    <?php

        echo "	<a target='galeria' href=' mostra-postagem.php?id=" .$res['id']. "'><img src='galeria/".$res['imagem']."' alt='Galeria'/><a> ";}
        echo "</div>";
    ?>
    <?php
      	if($pag!=1){
      		echo "<a target='galeria' href='recebe-galeria.php?pag=".($pag-1)."'> <h4 class='pagina-anterior'>Página Anterior</h4></a>";
      	}
      	if($contador<=$maximo){
      		echo "<b>Existe apenas uma única página</b>";
      	}
      	else{
      		for($i=1;$i<=$paginas;$i++){
      	     if($pag==$i){
      					echo "<h3><a target='galeria' href='recebe-galeria.php?pag=".$i."'> ".$i."</a></h3>";
      			 }else{
      					echo "<h3><a target='galeria' href='recebe-galeria.php?pag=".$i."'> ".$i."</a></h3>";
      			 }
      			}
      		}
      	if($pag!=$paginas){
      			echo "<a  target='galeria' href='recebe-galeria.php?pag=".($pag+1)."'><h4 class='pagina-anterior'> Próxima Página</h4></a>";
      	}

      ?>


</body>
</html>
