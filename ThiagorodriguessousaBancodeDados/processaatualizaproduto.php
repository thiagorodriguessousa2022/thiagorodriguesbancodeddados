<?php
session_start();
include_once("pdoconfig.php");

$codigodoproduto = filter_input(INPUT_POST, 'codigodoproduto', FILTER_SANITIZE_STRING);
$precodoproduto = filter_input(INPUT_POST, 'precodoproduto', FILTER_SANITIZE_STRING);


$result_usuario5 = "UPDATE produto SET precodoproduto = '$precodoproduto' WHERE codigodoproduto = '$codigodoproduto'";
$resultado_usuario5 = mysqli_query($conn, $result_usuario5);

$_SESSION['msg'] = "<p style='color:green;'>Produto atualizado com sucesso</p>";
	header("Location: atualizaproduto.php");
