<?php
include('../../Conexao/conexao.php');

	$codigo = $_POST['codigo'];
	$titulo2 = $_POST['titulo'];
	$descricao2 = $_POST['descricao'];
	$sql_atualizar = "UPDATE tb_post set nm_titulo_post = '$titulo2', ds_post = '$descricao2' where cd_post = $codigo";
	$query_atualizar = mysqli_query($conexao, $sql_atualizar);
	header("Location: index.php#mensagem_atualizado")
?>

