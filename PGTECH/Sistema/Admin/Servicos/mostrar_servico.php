<?php

include('../../Conexao/conexao.php');

$sql_pegar_im = "SELECT * from tb_post WHERE cd_categoria_post = 3 order by cd_post ";

$resultado_pegar_im = mysqli_query($conexao, $sql_pegar_im);

?>
