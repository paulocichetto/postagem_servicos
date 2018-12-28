<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>OOOOOOOOOOOOIII</title>
	<link rel="stylesheet" type="text/css" href="../../Assets/css/style.css">
</head>
<body>

<?php
//inicia sessao
session_start();
// verifica se o usuário ja foi logado
if (!isset($_SESSION['Usuario_Logado']) == true) {
	header("Location: ../index.php");//redireciona para o index se não foi logado
	session_destroy();//destroi a sessao
}
$usuario = $_SESSION['Usuario_Nome'];//pega o nome da sessao
include("../../Conexao/conexao.php");
?>
<a href="../../Login/logout.php">Logout</a>
<a href="../pagina.php">Voltar</a>
<!-- PAGINA -->

<h1>Bem vindo <?php echo $usuario; ?></h1>

<!-- <a href="Slider/index.php"><h2>Alterar Slider - Modal</h2></a> -->

<!-- alterar slider -->
	<!-- link para modal -->
	<a href="#openModal"><h2>Alterar Slider - Modal</h2></a>
	<!-- arquivo modal -->
	<div id="openModal" class="modal_slider">
	   	<div>
	       	<a href="#close" title="Close" class="closeModal"></a>
	       	<!-- conteudo do modal -->
	       	<?php
	       		include('Slider/index.php');
	       	?>
	   	</div>
	</div>
	<div id="mensagem_atualizada" class="modal_slider">
	   	<div>
	       	<a href="#close" title="Close" class="closeModal"></a>
	       	<!-- conteudo do modal -->
	       	<h2>Imagem Atualizada!!!</h2>
	   	</div>
	</div>
	<div id="mensagem_inserido" class="modal_slider">
	   	<div>
	       	<a href="#close" title="Close" class="closeModal"></a>
	       	<!-- conteudo do modal -->
	       	<h2>Imagem Inserida!!!</h2>
	   	</div>
	</div>

</body>
</html>