<?php
session_start();
include_once("pdoconfig.php");

$codigodacompra = filter_input(INPUT_POST, 'codigodacompra', FILTER_SANITIZE_STRING);
$totaldacompra = filter_input(INPUT_POST, 'totaldacompra', FILTER_SANITIZE_STRING);


$result_usuario35 = "UPDATE compra SET totaldacompra = '$totaldacompra' WHERE codigodacompra = '$codigodacompra'";
$resultado_usuario35 = mysqli_query($conn, $result_usuario35);

$_SESSION['msg'] = "<p style='color:green;'>Compra atualizada com sucesso</p>";
	header("Location: atualizacompra.php");
