<?php
session_start();
include_once("pdoconfig.php");

$codigodoproduto = filter_input(INPUT_POST, 'codigodoproduto', FILTER_SANITIZE_STRING);
$precodoproduto = filter_input(INPUT_POST, 'precodoproduto', FILTER_SANITIZE_STRING);


$result_usuario4 = "INSERT INTO produto (codigodoproduto, precodoproduto) VALUES ('$codigodoproduto', '$precodoproduto')";
$resultado_usuario4 = mysqli_query($conn, $result_usuario4);

$_SESSION['msg'] = "<p style='color:green;'>Produto cadastrado com sucesso</p>";
	header("Location: cadastroproduto.php");
