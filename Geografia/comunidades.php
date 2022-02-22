<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Elección de la Comunidad Autónoma</title>
</head>
<body>
    <?php
        include 'configBBDD.php'; //Incluimos los datos para la conexión

        $conexion = mysqli_connect($servername, $username, $password, $database) 
                    or die("No se ha podido establecer la conexión"); //creamos la conexión

        $consulta = "select nombre from comunidades order by nombre;"; //realizamos la consulta
        $resultado = mysqli_query($conexion, $consulta); //creamos la variable para que guarde el resultado
        $num_filas = mysqli_num_rows ($resultado); // comprobamos que haya datos en la base de datos

        if ($num_filas > 0) {//creamos la condición y cerramos php para crear el formulario
            ?>
            <form action="provincias.php"> <!-- creamos el formulario y detro de la etiqueta, ponemos un action con el nombre del archivo al que nos conducirá después -->
                <label for="comunidades">Elija la comunidad deseada</label> <!-- ponemos el nombre para saber que tendremos que elegir-->
                <select name="comunidades"> <!-- creamos el select donde seleccionaremos la comunidad -->
                    <?php
                        // abrimos otro php y vamos a introducir cada comunidad
                        while ($fila = mysqli_fetch_assoc ($resultado)) // capturamos con un cursor los resultados de la consulta
                            echo "<option value = '{$fila["nombre"]}'>{$fila["nombre"]}</option>"; // con este bucle guardamos cada fila para despues introducirla en el option
                    ?>
                </select> <!-- cerramos el select creado antes-->
                <button>Buscar provincias</button> <!-- creamos el botón de enviar -->
            </form>
            <?php // abrimos php otra vez para terminar el if y en caso de que no haya datos en la tabla nos lo diga
        } else {
            echo "No hay datos en la tabla";
        }
    // cerramos php para terminar el programa
    ?> 
</body>
</html>