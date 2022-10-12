<?php
session_start();
include_once("pdoconfig.php");


$result_usuario114 = "SELECT * FROM compra";
$resultado_usuario114 = mysqli_query($conn, $result_usuario114);


?>
<html>
    <head>
        <meta charset = "utf8">
    <head>
    <body bgcolor="cyan">
        <table border ="1">
            <tr>
                <td><b>Codigo da compra</b></td>
                <td><b>Total da compra</b></td>
                <td><b>Cpf do cliente</b></td>
                <td><b>Codigo do produto</b></td>
            </tr>
            <?php while($dado = $resultado_usuario114->fetch_array()){ ?>
            <tr>
                <td><b><?php echo $dado["codigodacompra"]; ?></b></td>
                <td><b><?php echo $dado["totaldacompra"]; ?></b></td>
                <td><b><?php echo $dado["ccpfcliente"]; ?></b></td>
                <td><b><?php echo $dado["ccodigodoproduto"]; ?></b></td>
            </tr>
            <?php } ?>
        </table>
    <body>
</html>       


