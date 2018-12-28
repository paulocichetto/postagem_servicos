<?php

include('../../Conexao/conexao.php');
//Primeiro temos que pegar as imagens do banco

$sql_pegar_im = "SELECT * from tb_post WHERE cd_categoria_post = 1 order by cd_ordem ";
$resultado_pegar_im = mysqli_query($conexao, $sql_pegar_im);

while ($row = mysqli_fetch_assoc($resultado_pegar_im)) {
	$result[] = $row;
}

// Agora vamos mudar a ordem das imagens, atualizando o atributo cd_ordem
