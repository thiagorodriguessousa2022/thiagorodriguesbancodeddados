<?php
session_start();
include_once("pdoconfig.php");

$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$salario = filter_input(INPUT_POST, 'salario', FILTER_SANITIZE_STRING);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);


$result_usuario13 = "UPDATE vendedor SET salario = '$salario', endereco ='$endereco'  WHERE cpf = '$cpf'";
$resultado_usuario13 = mysqli_query($conn, $result_usuario13);

$_SESSION['msg'] = "<p style='color:green;'>Vendedor atualizado com sucesso</p>";
	header("Location: atualizavendedor.php");