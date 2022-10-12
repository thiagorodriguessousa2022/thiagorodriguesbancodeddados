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
		<h1>Cadastrar Cliente</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="processacadastrocliente.php">
			<label>Cpf do Cliente: </label>
			<input type="text" name="cpfcliente" placeholder="Digite o Cpf do cliente"><br><br>
			
			<label>Nome: </label>
			<input type="text" name="nome3" placeholder="Digite o nome do cliente"><br><br>

			<label>Total da compra: </label>
			<input type="text" name="totaldacompracliente" placeholder="Digite o nome do cliente"><br><br>

			<label>Endereço do cliente: </label>
			<input type="text" name="enderecocliente" placeholder="Digite o endereco do cliente"><br><br>
			
			<input type="submit" value="Cadastrar Cliente">
		</form>
	</body>
</html>