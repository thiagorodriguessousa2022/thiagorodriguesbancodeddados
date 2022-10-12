<?php
session_start();
include_once("pdoconfig.php");


$result_usuario113 = "SELECT * FROM cliente";
$resultado_usuario113 = mysqli_query($conn, $result_usuario113);


?>
<html>
    <head>
        <meta charset = "utf8">
    <head>
    <body bgcolor="cyan">
        <table border ="1">
            <tr>
                <td><b>Cpf do cliente</b></td>
                <td><b>Nome</b></td>
                <td><b>Total da Compra</b></td>
                <td><b>Endereço</b></td>
            </tr>
            <?php while($dado = $resultado_usuario113->fetch_array()){ ?>
            <tr>
                <td><b><?php echo $dado["cpfcliente"]; ?></b></td>
                <td><b><?php echo $dado["nome3"]; ?></b></td>
                <td><b><?php echo $dado["totaldacompracliente"]; ?></b></td>
                <td><b><?php echo $dado["enderecocliente"]; ?></b></td>
            </tr>
            <?php } ?>
        </table>
    <body>
</html>       


