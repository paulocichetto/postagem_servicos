<meta charset="utf-8">
<?php
include('../../Conexao/conexao.php');

if ($_POST['cancelar']) {
	header("Location: index.php");
}elseif ($_POST['enviar']) {
	$nome = $_POST['nome'];
	$descricao = $_POST['descricao'];

	$imagem = $_FILES['imagem'];
			$extensao = strtolower(substr($_FILES['imagem']['name'], -4)); //Pegará os ultimos 4 caracteres do nome do arquivo, pegando a extensão ".jpg" por exemplo e a função strtolower coloca tudo em minusculo
		$novo_nome = md5(time()).$extensao;//o novo nome é o horário atual mais a extensão ***??
		$diretorio = "Imagens/";//A pasta onde fica as imagens

		//quando  ophp receber o arquivo, irá mover ele para a pasta desejável
		//tmp_name é um nome temporário do arquivo, como reconhecer ele
		move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$novo_nome);//moveu para a pasta desejável

		//vai ser colocado o caminho da imagem no servidor

		$sql = "INSERT INTO tb_post values (null, '$nome', '$descricao', '$novo_nome', null, 3)";
		$resultado = mysqli_query($conexao, $sql);

		if ($resultado) {
			header("Location: index.php#mensagem_inserido");
		}else{
			header("Location: index.php#mensagem_erro");
		}
}else{
	header("Location: index.php#mensagem_erro");
}
?>
