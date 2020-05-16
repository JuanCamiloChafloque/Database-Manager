<!DOCTYPE>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista de personas</title> 
    </head>
    <body>
        <?php
            include_once dirname(__FILE__) . '/config.php';
            $str = "";
            $con = mysqli_connect(HOST_DB, USUARIO_DB, USUARIO_PASS, NOMBRE_DB);
            if(mysqli_connect_errno()){
                $str = "Error en la conexión: " . mysqli_connect_errno();
            }


            $params = array();
            foreach($_GET as $key => $value){
                array_push($params, $key);
            }

            if($params[0] == 'nombre'){
                if($params[1] == 'ascendente'){
                    $sql = "SELECT * FROM Personas ORDER BY Nombre ASC";
                } else {
                    $sql = "SELECT * FROM Personas ORDER BY Nombre DESC";
                }
            } else {
                if($params[1] == 'ascendente'){
                    $sql = "SELECT * FROM Personas ORDER BY Cedula ASC";
                } else {
                    $sql = "SELECT * FROM Personas ORDER BY Cedula DESC";
                }                
            }

            $res = mysqli_query($con, $sql);

            $str .= '<table border = "1" style = "width: 100%">';
            $str .= '<tr>';
            $str .= '<th>Cedula</th>';
            $str .= '<th>Nombre</th>';
            $str .= '<th>Apellido</th>';
            $str .= '<th>Correo</th>';
            $str .= '<th>Edad</th>';
            $str .= '</tr>';

            while($fila = mysqli_fetch_array($res)){
                $str .= '<tr>';
                $str .= "<td>".$fila['Cedula']."<td>".$fila['Nombre']."<td>".$fila['Apellido']."<td>".$fila['Correo']."<td>".$fila['Edad']."</td>"; 
                $str .= '</tr>';
            }

            $str .= '</table>';
            echo $str;
            mysqli_close($con);
        ?>
        <br><br>
        <a href="administrarPersonas.php">Volver al administrador de personas</a><br>
    </body>

</html>