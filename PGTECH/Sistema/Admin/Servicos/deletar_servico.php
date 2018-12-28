<?php
include('../../Conexao/conexao.php');

if ($_POST['nao']) {
	header("Location: index.php");

}elseif (($_POST['sim'])) {
	$codigo = $_POST['codigo'];
	$sql_deletar = "DELETE from tb_post where cd_post = $codigo";
	$query_deletar = mysqli_query($conexao, $sql_deletar);
	header("Location: index.php#mensagem_deletado");

}else{
	header("Location: index.php#mensagem_erro");
}

?>