<?php
session_start();
include_once("pdoconfig.php");

$cpfcliente = filter_input(INPUT_POST, 'cpfcliente', FILTER_SANITIZE_STRING);
$nome3 = filter_input(INPUT_POST, 'nome3', FILTER_SANITIZE_STRING);
$totaldacompracliente = filter_input(INPUT_POST, 'totaldacompracliente', FILTER_SANITIZE_STRING);
$enderecocliente = filter_input(INPUT_POST, 'enderecocliente', FILTER_SANITIZE_STRING);


$result_usuario3 = "INSERT INTO cliente (cpfcliente, nome3, totaldacompracliente, enderecocliente) VALUES ('$cpfcliente', '$nome3', '$totaldacompracliente', '$enderecocliente')";
$resultado_usuario3 = mysqli_query($conn, $result_usuario3);

$_SESSION['msg'] = "<p style='color:green;'>Cliente cadastrado com sucesso</p>";
	header("Location: cadastrocliente.php");
