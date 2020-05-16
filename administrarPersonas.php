<!DOCTYPE>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Agregar Persona</title> 
    </head>
    <body>
        <h1>Gestor de personas</h1>
        <br>
        <div>
            <h3>Crear/Actualizar persona</h3>
            <form action="crearPersona.php" method="post">
                <label>Cedula:</label>
                <input type="text" placeholder="Ingrese una cédula..." name="cedula"><br>
                <label>Nombre:</label>
                <input type="text" placeholder="Ingrese un nombre..." name="nombre"><br>
                <label>Apellido:</label>
                <input type="text" placeholder="Ingrese un apellido..." name="apellido"><br>
                <label>Correo:</label>
                <input type="text" placeholder="Ingrese un correo..." name="correo"><br>
                <label>Edad:</label>
                <input type="number" placeholder="Ingrese edad..." name="edad"><br>
                <input type="submit" value="Guardar" name="Guardar">
            </form>        
        </div>
        <br>
        <div>
            <h3>Eliminar persona</h3>
            <form action="eliminarPersona.php" method="post">
                <label>Cedula:</label>
                <input type="text" placeholder="Ingrese una cedula..." name="cedula">
                <input type="submit" value="Eliminar" name="Eliminar">          
            </form>
        </div>
        <br>
        <div>
            <h3>Ver personas</h3>
            <form action="verPersonas.php" method="get">
                <label>Ordenar por:</label><br><br>
                <input type="radio" name="nombre"> Nombre <br>
                <input type="radio" name="cedula"> Cedula <br><br>
                <label>De forma:</label><br><br>
                <input type="radio" name="ascendente"> Ascendente <br>
                <input type="radio" name="descendente"> Descendente <br><br>

                <input type="submit" value="Ver personas" name="ver">
            </form>
        </div>

        <a href="index.php">Volver a menú principal</a>

    </body>
</html>