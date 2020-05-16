<!DOCTYPE>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gestor de Archivos</title> 
    </head>
    <body>
        <form action="subirArchivo.php" method="post" enctype="multipart/form-data">
            <label for="arch">Nombre:</label>
            <input type="file" name="arch" id="arch"><br>
            <input type="submit" name="submit" value="Enviar">            
        </form>

        <?php 
            $fecha = date('m/d/Y g:ia');
            echo $fecha;
        ?>

        <br>
        <br>

        <?php
            crear_imagen();
            echo "<img src=imagen.png?".date("U").">";

            function crear_imagen(){
                srand(mktime());

                $t1 = rand(150,300);
                $t2 = rand(150,300);
                $im = imagecreate($t1, $t2) or die("Error en la creacion de imagenes");

                
                $c1 = rand(0,255);
                $c2 = rand(0,255);

                $color_fondo = imagecolorallocate($im, $c1, $c2, 0);

                $c3 = rand(0,255);
                $c4 = rand(0,255);

                $rojo = imagecolorallocate($im, $c3, 0, 0);                
                $azul = imagecolorallocate($im, 0, 0, $c4);                
                imagerectangle ($im,   5,  10, 195, 50, $rojo);
                imagefilledrectangle ($im,   5,  100, 195, 140, $azul);

                imagepng($im,"imagen.png");
                imagedestroy($im);
            }    
        ?>
        <br><br>
        <a href="index.php">Volver al menú principal</a><br>
    </body>
</html>