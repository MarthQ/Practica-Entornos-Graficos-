<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Completo</title>
</head>

<body>
    <?php
    include("conexion.inc");
    $vSql = "SELECT * FROM doc_utn";
    $vResultado = mysqli_query($link, $vSql);
    $total_registros = mysqli_num_rows($vResultado);
    ?>
    <table>
        <tr>
            <td><b>Usuario</b></td>
            <td><b>DNI</b></td>
            <td><b>Email</b></td>
        </tr>
        <?php
        while ($fila = mysqli_fetch_array($vResultado)) {
        ?>
            <tr>
                <td><?php echo ($fila['apel_nom']); ?></td>
                <td><?php echo ($fila['dni']); ?></td>
                <td><?php echo ($fila['email']); ?></td>
            </tr>
            <tr>
                <td colspan="5">
                <?php
            }
            // Liberar conjunto de resultados
            mysqli_free_result($vResultado);
            // Cerrar la conexion
            mysqli_close($link);
                ?>
                </td>
            </tr>
    </table>
    <p>&nbsp;</p>
    <p><a href="Menu.html">Volver al menu; del ABM</a></p>

</body>

</html>