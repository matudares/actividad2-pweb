<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de area Octagono</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php

    if (isset($_POST['lado']) && $_POST['btn'] == 'Calcular') {
        $lado = $_POST['lado'];
        $apotema = $_POST['apotema'];
        $area = null;

        if (!empty($lado) or !empty($apotema)) {
            echo "<h2 align = 'center'> CALCULO DEL AREA DE UN OCTAGONO REGULAR </h2>";

            $area= 4*$lado*$apotema;

            echo "<br>Tamaño de los lados: ", $lado;
            echo "<br>Apotema: ", $apotema;
            echo "<br/><br/>";
            echo "<br>Area del octagono regular: ", $area;
            echo "<br/><br/>";
            echo "<div id = 'return' align='center'><a href='index.html'>Regresar a la calculadora</a></div>";
        }
        else {
            echo "<h1 align = 'center' > Hubo un error en el calculo del area, por favor verifique los campos </h1>";
            echo "<div align='center'><a href='index.html'>Regresar a la calculadora</a></div>";
        }
    } 

?>
</body>
</html>