<meta charset="utf-8">
<?php
$codigo = $_POST['codigo_imagem'];
include('../../../Conexao/conexao.php');

$query = mysqli_query($conexao, "DELETE FROM tb_post WHERE cd_post = '$codigo'");
?>