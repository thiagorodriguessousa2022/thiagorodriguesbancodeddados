<?php
session_start();
include_once("pdoconfig.php");

$codigodoproduto = filter_input(INPUT_POST, 'codigodoproduto', FILTER_SANITIZE_STRING);



$result_usuario80 = "DELETE FROM produto WHERE codigodoproduto = '$codigodoproduto'";
$resultado_usuario80 = mysqli_query($conn, $result_usuario80);

$_SESSION['msg'] = "<p style='color:green;'>Produto deletado com sucesso</p>";
	header("Location: deleteproduto.php");
