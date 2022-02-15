<?php

    include ("conexion.php");
    $conn = mysqli_connect($servidor, $usuario, $clave, $base_datos) 
            or die ("No ha sido posible establecer la conexión");
    echo ("La conexión se ha realizado con exito <br>");

    if (isset($_GET['nombre'])){
        $insertar = "insert into cliente (Nombre) values ('{$_GET['nombre']}');";
        $resultado = mysqli_query ($conn, $insertar) or die ("No se ha realizado la inserción");
    } else {
        echo "No se ha especificado el balor del nombre";
    }


  

?>