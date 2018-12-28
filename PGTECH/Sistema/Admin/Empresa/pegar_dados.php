<meta charset="utf-8">
<?php

include_once('../../Conexao/conexao.php');

$sql = "SELECT * from tb_empresa";
$resul = mysqli_query($conexao, $sql);
$rows = mysqli_num_rows($resul);
while ($row = mysqli_fetch_array($resul)) {
	$codigo = $row['cd_empresa'];
	$nm_cidade = $row['nm_cidade'];
	$nm_bairro = $row['nm_bairro'];
	$nm_rua = $row['nm_rua'];
	$cd_numero_local = $row['cd_numero_local'];
	$cd_telefone1 = $row['cd_telefone1'];
	$cd_telefone2 = $row['cd_telefone2'];
	$cd_celular = $row['cd_celular'];
	$ds_email = $row['ds_email'];
	$nm_facebook = $row['nm_facebook'];
}
?>