<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php

session_start();
if (isset($_SESSION['Usuario_Logado'])) {
	header("Location: pagina.php");
	die();
}

?>
<form method="POST" action="../Login/login.php">
	<label for="usuario">Usuário:</label>
	<input type="text" name="usuario">
		<br>
	<label for="senha">Senha:</label>
	<input type="text" name="senha">
<br>
<input type="submit" name="enviar">
<input type="reset" name="limpar">
</form>

</body>
</html>