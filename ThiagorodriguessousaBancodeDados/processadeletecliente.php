<?php
session_start();
include_once("pdoconfig.php");

$cpfcliente = filter_input(INPUT_POST, 'cpfcliente', FILTER_SANITIZE_STRING);



$result_usuario60 = "DELETE FROM cliente WHERE cpfcliente = '$cpfcliente'";
$resultado_usuario60 = mysqli_query($conn, $result_usuario60);

$_SESSION['msg'] = "<p style='color:green;'>Cliente deletado com sucesso</p>";
	header("Location: deletecliente.php");
