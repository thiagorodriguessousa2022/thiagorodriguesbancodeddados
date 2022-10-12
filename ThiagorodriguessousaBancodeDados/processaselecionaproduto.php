<?php
session_start();
include_once("pdoconfig.php");


$result_usuario123 = "SELECT * FROM produto";
$resultado_usuario123 = mysqli_query($conn, $result_usuario123);


?>
<html>
    <head>
        <meta charset = "utf8">
    <head>
    <body bgcolor="cyan">
        <table border ="1">
            <tr>
                <td><b>Codigo do produto</b></td>
                <td><b>Preço do produto</b></td>
            
            </tr>
            <?php while($dado = $resultado_usuario123->fetch_array()){ ?>
            <tr>
                <td><b><?php echo $dado["codigodoproduto"]; ?></b></td>
                <td><b><?php echo $dado["precodoproduto"]; ?></b></td>
            </tr>
            <?php } ?>
        </table>
    <body>
</html>       