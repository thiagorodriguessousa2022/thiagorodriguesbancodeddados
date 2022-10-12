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
		<h1>Deletar Compra</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="processadeletecompra.php">
			<label>Codigo da compra: </label>
			<input type="text" name="codigodacompra" placeholder="Digite o codigo da compra"><br><br>

			
			
			<input type="submit" value="Deletar Compra">
		</form>
	</body>
</html>