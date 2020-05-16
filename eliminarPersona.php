<!DOCTYPE>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Eliminar Personas</title> 
    </head>
    <body>
        <?php
            include_once dirname(__FILE__) . '/config.php';
            $con = mysqli_connect(HOST_DB, USUARIO_DB, USUARIO_PASS, NOMBRE_DB);
            if(mysqli_connect_errno()){
                echo "Error accediendo a la base de datos";
            }

            $cedula = $_POST['cedula'];
            $sql = "DELETE FROM Personas WHERE Cedula = \"$cedula\"";
            if(mysqli_query($con, $sql)){
                echo "Persona eliminada correctamente.";
            } else {
                echo "Error eliminando a la persona";
            }
        ?>
        <br><br>
        <a href="administrarPersonas.php">Volver al administrador de personas</a><br>
    </body>
</html>