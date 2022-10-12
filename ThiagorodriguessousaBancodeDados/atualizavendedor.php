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
		<h1>Atualizar Vendedor</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="processaatualizavendedor.php">
			<label>Cpf do Vendedor: </label>
			<input type="text" name="cpf" placeholder="Digite o Cpf do Vendedor"><br><br>

			<label>salario: </label>
			<input type="text" name="salario" placeholder="Digite salario do vendedor"><br><br>

			<label>Endereço: </label>
			<input type="text" name="endereco" placeholder="Digite o endereco do vendedor"><br><br>
			
			
			<input type="submit" value="Atualiza Vendedor">
		</form>
	</body>
</html>