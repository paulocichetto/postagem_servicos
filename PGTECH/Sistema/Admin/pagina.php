<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>OOOOOOOOOOOOIII</title>
</head>
<body>

<?php
//inicia sessao
session_start();
// verifica se o usuário ja foi logado
if (!isset($_SESSION['Usuario_Logado']) == true) {
	header("Location: index.php");//redireciona para o index se não foi logado
	session_destroy();//destroi a sessao
}
$usuario = $_SESSION['Usuario_Nome'];//pega o nome da sessao
include("../Conexao/conexao.php");
?>
<a href="../Login/logout.php">Logout</a>

<h1>Bem vindo <?php echo $usuario; ?></h1>

<ul>
	<li><a href="Home/home.php">Home</a></li>
	<li><a href="Servicos/index.php">Serviços</a></li>
	<li><a href="Empresa/index.php">Empresa</a></li>
</ul>

</body>
</html>