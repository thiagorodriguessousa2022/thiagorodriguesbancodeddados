<?php
session_start();
include_once("pdoconfig.php");

$codigodacompra = filter_input(INPUT_POST, 'codigodacompra', FILTER_SANITIZE_STRING);
$totaldacompra = filter_input(INPUT_POST, 'totaldacompra', FILTER_SANITIZE_STRING);
$ccpfcliente = filter_input(INPUT_POST, 'ccpfcliente', FILTER_SANITIZE_STRING);
$ccodigodoproduto = filter_input(INPUT_POST, 'ccodigodoproduto', FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "INSERT INTO compra (codigodacompra, totaldacompra, ccpfcliente, ccodigodoproduto) VALUES ('$codigodacompra', '$totaldacompra', '$ccpfcliente', $ccodigodoproduto)";
$resultado_usuario = mysqli_query($conn, $result_usuario);

$_SESSION['msg'] = "<p style='color:green;'>Compra realizada com sucesso</p>";
	header("Location: compraproduto.php");
