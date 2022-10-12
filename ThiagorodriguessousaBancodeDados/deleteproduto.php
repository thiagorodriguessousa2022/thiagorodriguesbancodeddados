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
		<h1>Deletar Produto</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="processadeleteproduto.php">
			<label>Deleta Produto: </label>
			<input type="text" name="codigodoproduto" placeholder="Digite o codigo do produto"><br><br>
			
			<input type="submit" value="Deletar produto">
		</form>
	</body>
</html>