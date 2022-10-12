<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Cadastrar</title>		
	</head>
	<body>
		<h1>Deletar Cliente</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="processadeletecliente.php">
			<label>Cpf do Cliente: </label>
			<input type="text" name="cpfcliente" placeholder="Digite o Cpf do cliente"><br><br>
			
			<input type="submit" value="Deletar Cliente">
		</form>
	</body>
</html>