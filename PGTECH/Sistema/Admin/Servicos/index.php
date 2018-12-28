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

<!-- Lista de Servicos com subservicos-->
<h2>Lista de servicos da empresa</h2>

<!-- Modal para adicionar um servico -->

<a href="#adicionar_servico"><button>+</button></a>
	<div id="adicionar_servico" class="modal_slider">
	   	<div>
	       	<a href="#close" title="Close" class="closeModal"></a>
	       	<!-- conteudo do modal -->
	       	<h2>Gostaria de inserir algum servico?</h2>
				<form method="post" action="inserir_servico.php" enctype="multipart/form-data">
					<label for="nome">Nome</label>
					<input type="text" name="nome">
					<label for="descricao">Descrição</label>
					<input type="text" name="descricao">
					<input type="file" name="imagem" required>
					<input type="submit" value="Enviar" name="enviar">
					<input type="submit" value="Cancelar" name="cancelar">
				</form>
	    </div>
	</div>
<br>
<?php

include('mostrar_servico.php');

while ($row = mysqli_fetch_assoc($resultado_pegar_im)) {

	$codigo = $row['cd_post'];
	$titulo = $row['nm_titulo_post'];
	$descricao = $row['ds_post'];
	$imagem = $row['im_post'];

	echo "Codigo: ".$codigo;
	echo "<br>";
	echo "Título: ".$titulo;
	echo "<br>";
	echo "Descrição: ".$descricao;
?>
	<br>
	<img src='Imagens/<?php echo $imagem ?>' width = '300px'></img>
	<br>
	<form method="POST" action="#deletar_servico">
		<input type="hidden" name="codigo" value="<?php echo $codigo ?>">
		<input type="submit" name="deletar" value="DELETAR">
	</form>
	<form method="POST" action="index.php#atualizar_servico">
		<input type="hidden" name="codigo" value="<?php echo $codigo ?>">
		<input type="submit" name="atualizar" value="ATUALIZAR">
	</form>
	<br>
	<br>
<?php
}
?>
<br>
	<div id="atualizar_servico" class="modal_slider">
	  	<div>
	       	<a href="#close" title="Close" class="closeModal"></a>
	       	<!-- conteudo do modal -->
	       	<h2>Gostaria de atualizar esse servico?</h2>

		    <?php
		    	include('../../Conexao/conexao.php');
					$codigo_a = $_POST['codigo'];

					$sql_select = "SELECT * from tb_post where cd_post = $codigo_a";
					$query_select = mysqli_query($conexao, $sql_select);
					while ($row = mysqli_fetch_assoc($query_select)) {
						$titulo_a = $row['nm_titulo_post'];
						$descricao_a = $row['ds_post'];
						$imagem_a = $row['im_post'];
					}
			?>
				<form method="post" action="atualizar_servico.php" enctype="multipart/form-data">
				<input type="hidden" name="codigo" value="<?php echo $codigo_a ?>">
				<label for="titulo">Titulo: </label>
				<input type="text" name="titulo" placeholder="<?php echo $titulo_a ?>">
				<label for="descricao">Descricao: </label>
				<input type="text" name="descricao" placeholder="<?php echo $descricao_a ?>">
				<br>
				<input type="submit" value="Atualizar" name="atualizar_2">
				<input type="reset" value="Cancelar" name="cancelar">
			</form>
	    </div>
	</div>

		<div id="deletar_servico" class="modal_slider">
	   	<div>
	       	<a href="#close" title="Close" class="closeModal"></a>
	       	<!-- conteudo do modal -->
	       	<h2>Gostaria mesmo de apagar esse servico?</h2>
				<?php
					$codigo = $_POST['codigo'];
					echo $codigo;
				?>
				<form method="post" action="deletar_servico.php" enctype="multipart/form-data">
					<input type="hidden" name="codigo" value="<?php echo $codigo ?>">
					<input type="submit" value="Sim" name="sim">
					<input type="submit" value="Não" name="nao">
				</form>
	    </div>
	</div>

	<div id="mensagem_deletado" class="modal_slider">
	   	<div>
	       	<a href="#close" title="Close" class="closeModal"></a>
	       	<!-- conteudo do modal -->
	       	<h2>Serviço Deletado!!!</h2>
		</div>
	</div>
	<div id="mensagem_erro" class="modal_slider">
	   	<div>
	       	<a href="#close" title="Close" class="closeModal"></a>
	       	<!-- conteudo do modal -->
	       	<h2>Erro!!!</h2>
		</div>
	</div>
	<div id="mensagem_inserido" class="modal_slider">
	   	<div>
	       	<a href="#close" title="Close" class="closeModal"></a>
	       	<!-- conteudo do modal -->
	       	<h2>Servico Inserido!!!</h2>
		</div>
	</div>
	<div id="mensagem_atualizado" class="modal_slider">
	   	<div>
	       	<a href="#close" title="Close" class="closeModal"></a>
	       	<!-- conteudo do modal -->
	       	<h2>Servico Atualizado!!!</h2>
		</div>
	</div>
</body>
</html>