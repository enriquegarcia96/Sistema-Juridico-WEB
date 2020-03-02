<?php
    //llamando la clase conexion
    require_once "Conexion/Conexion.php";
?>


<!DOCTYPE html>
<html>
<head>
    <title>mostrar datos</title>
</head>

<body>
    <table>
        <tr>
            <td>codigo</td>
            <td>identidad</td>
            <td>nombre usuario</td>
            <td>primer nombre</td>
            <td>apellido</td>
            <td>correo electronico</td>
            <td>telefono</td>
            <td>creacion</td>

            <?php
            //es igual a java los prepare, solo que cambia la sintaxis
            $consulta = Conexion::abriendoConexion()->prepare("SELECT * FROM usuario;");

            $consulta->execute();
            $consulta->setFetchMode(PDO::FETCH_ASSOC);

            while ($row = $consulta->fetch()){
            ?>

        </tr>
            <td><?php echo $row['codigo'] ?></td>
            <td><?php echo $row['identidad'] ?></td>
            <td><?php echo $row['nombre_usuario'] ?></td>
            <td><?php echo $row['primer_nombre'] ?></td>
            <td><?php echo $row['apellido'] ?></td>
            <td><?php echo $row['correo_electronico'] ?></td>
            <td><?php echo $row['telefono'] ?></td>
            <td><?php echo $row['creacion'] ?></td>
        <?php
        }
        ?>
    </table>
</body>
</html>











