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
		<h1>Compra do Produto</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="processacompra.php">
			<label>Codigo da compra: </label>
			<input type="text" name="codigodacompra" placeholder="Digite o codigo do compra"><br><br>
			
			<label>Total da Compra: </label>
			<input type="text" name="totaldacompra" placeholder="Digite o total da compra"><br><br>

			<label> Cpf do cliente: </label>
			<input type="text" name="ccpfcliente" placeholder="Digite o cpf do cliente"><br><br>

			<label> Codigo do produto: </label>
			<input type="text" name="ccodigodoproduto" placeholder="Digite o codigo do produto"><br><br>
			
			<input type="submit" value="Cadastrar Compra">
		</form>
	</body>
</html>