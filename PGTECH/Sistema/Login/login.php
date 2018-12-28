<meta charset="utf-8">
<?php
session_start();
include('../Conexao/conexao.php');//inclui conexao

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

echo $usuario;
echo $senha;
//busca de informacoes sobre login
$sql = "SELECT * from tb_login where (nm_login = '$usuario') and (ds_senha = '$senha');";
$busca_usuario = mysqli_query($conexao, $sql) or die (mysqli_error($conexao));
//verifica a busca de login
if (mysqli_num_rows($busca_usuario) !=1) {
	$encontrar_usuario = "SELECT * from tb_login where nm_login = '$usuario';";
	$query_encontrar_usuario = mysqli_query($conexao, $encontrar_usuario);
		if (mysqli_num_rows($query_encontrar_usuario) !=1) {
			echo "Usuário não encontrado";
			// header("Location: ../Admin");
		}
		else{
			echo "Senha digitada errada";
			// header("Location: ../Admin");
		}
	}
	else{
		while ($resultado_login = mysqli_fetch_array($busca_usuario)) {
			$codigo = $resultado_login['cd_login'];
		}
		echo $codigo;
		$_SESSION['Usuario_Logado'] = true;//a sessao é habilitada
		$_SESSION['Usuario_Nome'] = $usuario;//adquire o nome do usuario
		header('Location: ../Admin/pagina.php');//redireciona pra pagina do admin
	}
?>