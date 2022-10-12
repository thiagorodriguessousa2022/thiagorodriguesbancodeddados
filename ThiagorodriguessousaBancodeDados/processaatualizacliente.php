<?php
session_start();
include_once("pdoconfig.php");

$cpfcliente = filter_input(INPUT_POST, 'cpfcliente', FILTER_SANITIZE_STRING);
$enderecocliente = filter_input(INPUT_POST, 'enderecocliente', FILTER_SANITIZE_STRING);

$result_usuario11 = "UPDATE cliente SET enderecocliente = '$enderecocliente' WHERE cpfcliente = '$cpfcliente'";
$resultado_usuario11 = mysqli_query($conn, $result_usuario11);

$_SESSION['msg'] = "<p style='color:green;'>Cliente atualizado com sucesso</p>";
	header("Location: atualizacliente.php");
