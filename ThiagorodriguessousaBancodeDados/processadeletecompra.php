<?php
session_start();
include_once("pdoconfig.php");

$codigodacompra = filter_input(INPUT_POST, 'codigodacompra', FILTER_SANITIZE_STRING);



$result_usuario91 = "DELETE FROM compra WHERE codigodacompra = '$codigodacompra'";
$resultado_usuario91 = mysqli_query($conn, $result_usuario91);

$_SESSION['msg'] = "<p style='color:green;'>Compra deletada com sucesso</p>";
	header("Location: deletecompra.php");
