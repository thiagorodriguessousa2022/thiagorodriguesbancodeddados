<?php
session_start();
include_once("pdoconfig.php");


$result_usuario115 = "SELECT * FROM vendedor";
$resultado_usuario115 = mysqli_query($conn, $result_usuario115);


?>
<html>
    <head>
        <meta charset = "utf8">
    <head>
    <body bgcolor="cyan">
        <table border ="1">
            <tr>
                <td><b>Cpf do vendedor</b></td>
                <td><b>Nome do vendedor</b></td>
                <td><b>Salário do vendedor</b></td>
                <td><b>Endereço do vendedor</b></td>
            </tr>
            <?php while($dado = $resultado_usuario115->fetch_array()){ ?>
            <tr>
                <td><b><?php echo $dado["cpf"]; ?></b></td>
                <td><b><?php echo $dado["nome2"]; ?></b></td>
                <td><b><?php echo $dado["salario"]; ?></b></td>
                <td><b><?php echo $dado["endereco"]; ?></b></td>
            </tr>
            <?php } ?>
        </table>
    <body>
</html>       


