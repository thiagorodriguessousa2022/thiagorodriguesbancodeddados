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
		<h1>Atualizar Produto</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="processaatualizaproduto.php">
			<label>Codigo do produto: </label>
			<input type="text" name="codigodoproduto" placeholder="Digite o codigo do produto"><br><br>
			
			<label>Preço: </label>
			<input type="text" name="precodoproduto" placeholder="Digite o preço do produto"><br><br>
			
			<input type="submit" value="Atualizar Produto">
		</form>
	</body>
</html>