<?php 
    // crear una multiples usuario resividos por html y verificaran si la opcion existe
    // mostrar un mensaje diferente para cada uno de ellos Ejemplo 'netflix'
    // Mostrar las opciones que no existen usando switch 
    $nombre = (int) (isset($_REQUEST['nombre'])) ? $_REQUEST['nombre'] : 0;

    if($nombre == "juan")
    $servicio = "";
    switch ($nombre) {
        case "juan": $servicio = "Amazon prime video"; echo "Bienvenido Juan"; goto pasar;
        case "pedro": $servicio = "Netflix"; echo "Bienvenido Pedro"; goto pasar;
        case "andrea": $servicio = "Disney +"; echo "Bienvenida Andrea"; goto pasar;
            pasar:
            echo "<br> Estas habilitad@ para acceder a $servicio por 30 dias";
            break;
        default:
            echo "El usuario $nombre no se encuentra registrado, intentelo nuevamente !";
            break;
    }
    echo '<hr><a href="index.html">Regresar</a>';

?>