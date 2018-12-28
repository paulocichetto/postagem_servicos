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
<h1>Bem vindo <?php echo $usuario; ?></h1>

<h2>Alterar dados da empresa</h2>
<?php

include('pegar_dados.php');

?>
<form method="post" action="atualizar.php">
<label for="cidade">Cidade: </label>
<input type="text" name="cidade" placeholder="<?php echo utf8_encode($nm_cidade) ?>">
<br>
<label for="bairro">Bairro: </label>
<input type="text" name="bairro" placeholder="<?php echo utf8_encode($nm_bairro) ?>">
<br>
<label for="endereco">Endereço: </label>
<input type="text" name="endereco" placeholder="<?php echo utf8_encode($nm_rua) ?>">
<br>
<label for="numero">Numero: </label>
<input type="text" name="numero" placeholder="<?php echo utf8_encode($cd_numero_local) ?>">
<br>
<label for="telefone">Telefone 1: </label>
<input type="text" name="telefone" placeholder="<?php echo utf8_encode($cd_telefone1) ?>">
<br>
<label for="telefone">Telefone 2: </label>
<input type="text" name="telefone" placeholder="<?php echo utf8_encode($cd_telefone2) ?>">
<br>
<label for="celular">Celular: </label>
<input type="text" name="celular" placeholder="<?php echo utf8_encode($cd_celular) ?>">
<br>
<label for="email">Email: </label>
<input type="text" name="email" placeholder="<?php echo utf8_encode($ds_email) ?>">
<br>
<label for="facebook">Facebook: </label>
<input type="text" name="facebook" placeholder="<?php echo utf8_encode($nm_facebook) ?>">
<br>
<input type="reset" value="Cancelar">
<input type="submit" value="Atualizar">
</form>

	<div id="mensagem_atualizado" class="modal_slider">
	   	<div>
	       	<a href="#close" title="Close" class="closeModal"></a>
	       	<!-- conteudo do modal -->
			<h2>Informações atualizadas!!!</h2>
		</div>
	</div>
</body>
</html>