<meta charset="utf-8">
<?php

include_once('../../Conexao/conexao.php');

$nm_cidade = $_POST['cidade'];
if (!empty($nm_cidade)) {
	$cidade = mysqli_query($conexao, "UPDATE tb_empresa SET nm_cidade=  '".$nm_cidade."' where cd_empresa = 1");
}
$nm_bairro = $_POST['bairro'];
if (!empty($nm_bairro)) {
	$bairro = mysqli_query($conexao, "UPDATE tb_empresa SET nm_bairro=  '".$nm_bairro."' where cd_empresa = 1");
}
$nm_rua = $_POST['endereco'];
if (!empty($nm_rua)) {
	$rua = mysqli_query($conexao, "UPDATE tb_empresa SET nm_rua=  '".$nm_rua."' where cd_empresa = 1");
}
$cd_numero_local = $_POST['numero'];
if (!empty($cd_numero_local)) {
	$numero = mysqli_query($conexao, "UPDATE tb_empresa SET cd_numero_local=  '".$cd_numero_local."' where cd_empresa = 1");
}
$cd_telefone1 = $_POST['telefone1'];
if (!empty($cd_telefone1)) {
	$telefone1 = mysqli_query($conexao, "UPDATE tb_empresa SET cd_telefone1=  '".$cd_telefone1."' where cd_empresa = 1");
}
$cd_telefone2 = $_POST['telefone2'];
if (!empty($cd_telefone2)) {
	$telefone2 = mysqli_query($conexao, "UPDATE tb_empresa SET cd_telefone2=  '".$cd_telefone2."' where cd_empresa = 1");
}
$cd_celular = $_POST['celular'];
if (!empty($cd_celular)) {
	$celular = mysqli_query($conexao, "UPDATE tb_empresa SET cd_celular=  '".$cd_celular."' where cd_empresa = 1");
}
$ds_email = $_POST['email'];
if (!empty($ds_email)) {
	$email = mysqli_query($conexao, "UPDATE tb_empresa SET ds_email=  '".$ds_email."' where cd_empresa = 1");
}
$nm_facebook = $_POST['facebook'];
if (!empty($nm_facebook)) {
	$facebook = mysqli_query($conexao, "UPDATE tb_empresa SET nm_facebook=  '".$nm_facebook."' where cd_empresa = 1");
}


// $resultado = mysqli_query($conexao, "UPDATE tb_empresa SET nm_cidade=  '".$nm_cidade."' where cd_empresa = 1");

// $resultado2 = mysqli_query($conexao, "UPDATE `tb_empresa` SET `nm_cidade`=$nm_cidade,`nm_bairro`=$nm_bairro,`nm_rua`=$nm_rua,`cd_numero_local`=$cd_numero_local,`cd_telefone1`=$cd_telefone1,`cd_telefone2`=$cd_telefone2,`cd_celular`=$cd_celular,`ds_email`=$ds_email,`nm_facebook`=$nm_facebook WHERE 1");

header('Location: index.php#mensagem_atualizado');
?>