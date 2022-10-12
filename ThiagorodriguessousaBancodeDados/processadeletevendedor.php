<?php
session_start();
include_once("pdoconfig.php");

$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);



$result_usuario90 = "DELETE FROM vendedor WHERE cpf = '$cpf'";
$resultado_usuario90 = mysqli_query($conn, $result_usuario90);

$_SESSION['msg'] = "<p style='color:green;'>Vendedor deletado com sucesso</p>";
	header("Location: deletevendedor.php");
