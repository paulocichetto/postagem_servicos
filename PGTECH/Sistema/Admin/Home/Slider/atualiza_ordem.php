<?php
include('../../../Conexao/conexao.php');
$idArray  =  explode ( "," , $_POST [ 'ids' ]);
$contador = 1;

foreach ($idArray as $key => $value) {
	$sql_atualizar_ordem = "UPDATE tb_post set cd_ordem = $contador where cd_post = $value";
	$contador += 1;
	$resultado_update = mysqli_query($conexao, $sql_atualizar_ordem);

}
?>