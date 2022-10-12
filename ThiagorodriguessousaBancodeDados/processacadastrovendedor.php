<?php
session_start();
include_once("pdoconfig.php");

$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$nome2 = filter_input(INPUT_POST, 'nome2', FILTER_SANITIZE_STRING);
$salario = filter_input(INPUT_POST, 'salario', FILTER_SANITIZE_STRING);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);


$result_usuario2 = "INSERT INTO vendedor (cpf, nome2, salario, endereco) VALUES ('$cpf', '$nome2', '$salario', '$endereco')";
$resultado_usuario2 = mysqli_query($conn, $result_usuario2);

$_SESSION['msg'] = "<p style='color:green;'>Vendedor cadastrado com sucesso</p>";
	header("Location: cadastrovendedor.php");
