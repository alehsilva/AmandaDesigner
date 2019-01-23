<?php
/*
 * Produto desenvolvido pelo Clube dos Geeks, especialmente por Jayr Alencar Pereira
 * Em caso de modificações o nome do autor original deve ser mantido
 * Acesse: www.clubedosgeeks.com.br
 * */

	//Conexão com banco de dados
	mysql_connect('localhost', 'root', 'usbw') or die('Erro ao conectar com o servidor');
	mysql_select_db('amandadesigner') or die ('Erro ao selecionar o banco de dados');
	//Busca no banco de dados para contagem
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
	$maximo=1; //Quantidade Máxima de posts por página
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

	</head>
	<body>
		<?php
			echo "Página ".$pag." de ".$paginas; //Informando qual é a página atual
		?>
		<table border="1" width="300">
			<tr>
				<td>ID</td>
				<td>Nome</td>
				<td>E-mail</td>
			</tr>
			<?php
				$sql="SELECT * FROM postagem ORDER BY id LIMIT $inicio, $maximo"; //consulta no BD
				$resultados = mysql_query($sql) //Executando consulta
				or die (mysql_error()); //Se ocorrer erro mostre-o
				if (@mysql_num_rows($resultados) == 0) //Se não retornar nada
				echo("Nenhum cadastro encontrado");
				while ($res=mysql_fetch_array($resultados)) { //laço para listagem de itens
				$id = $res[0];
				$nome = $res[1];
				$email = $res[2];
			?>
			<tr>
				<td><?php echo $id ?></td>
				<td><?php echo $nome ?></td>
				<td><?php echo $email?></td>
			</tr>
			<?php } ?>
		</table>
		<br />
		<table border="1">
			<tr>
			<?php
				if($pag!=1){
					echo "<td><a href='teste.php?pag=".($pag-1)."'> Página Anterior</a></td>";
				}
				if($contador<=$maximo){
					echo "<td>Existe apenas uma única página</td>";
				}
				else{
					for($i=1;$i<=$paginas;$i++){
						if($pag==$i){
							echo "<td  style='background: red'><a href='teste.php?pag=".$i."'> ".$i."</a></td>";
						}else{
							echo "<td><a href='teste.php?pag=".$i."'> ".$i."</a></td>";
						}
					}
				}
				if($pag!=$paginas){
					echo "<td><a href='teste.php?pag=".($pag+1)."'> Próxima Página</a></td>";
				}
			?>
		</tr>
		</table>
	</body>
</html>
