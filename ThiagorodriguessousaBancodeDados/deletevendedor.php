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
		<h1>Deletar Vendedor</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="processadeletevendedor.php">
			<label>Cpf do Vendedor: </label>
			<input type="text" name="cpf" placeholder="Digite o Cpf do Vendedor"><br><br>

			
			
			<input type="submit" value="Deletar Vendedor">
		</form>
	</body>
</html>