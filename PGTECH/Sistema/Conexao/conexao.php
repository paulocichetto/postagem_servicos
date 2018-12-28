<?php

$host = 'localhost';
$user = 'root';
$senha = 'usbw';
$banco = 'db_pgtech';

$conexao = mysqli_connect($host, $user, $senha, $banco) or die ("Problemas na conexão do banco de dados");
?>