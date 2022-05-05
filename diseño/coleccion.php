<?php
    ini_set('display_errors', 'On');
    require __DIR__ . '/../php_util/db_connection.php';
    session_start();
    $mysqli = get_db_connection_or_die();
    $user_id = $_SESSION['user_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/estilo_colección.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container-fluid" id="contenedor_principal">
        <div class="row">
            <div class="col text-center" id="col_tienda">
                <a href="#" id="texto_menu">TIENDA</a>
            </div>
            <div class="col text-start" id="col_tienda">
                <a href="#" id="texto_menu">COLECCIÓN</a>
            </div>
            <div class="col text-center">
                <button type="button" class="btn" id="iniciar"><b><a href="#" id="inicio">Logout</a></b></button>
            </div>
        </div>
        <div class="row align-items-center" id="fila_imagenes">
            <div class="col text-center">
                <h1>TU COLECCIÓN</h1>
            </div>
            <?php
                #Comprobamos que la sesión no está vacía
                if (empty($user_id)) {
                    header('Location: error.php?mensaje=Error');
                } else {
                    #Instanciamos una variable donde cogemos todos los datos del usuario que tenga como id el comprobado anteriormente
                    // $carta = "SELECT id_carta FROM tuser_carta WHERE id_user=3";
                    // $result = mysqli_query($mysqli, $carta) or die('Query Error');
                    // #Almacenamos en la variable result la query
                    // $row1 = mysqli_fetch_array($result);
                    #Comprobamos que la casilla de la columna business_name es nula para ese usuario
                    echo '<br>';
                    echo '<br>';
                    echo '<br>';
                    echo '<br>';
                    #Creamos una variable que nos almacene toda la información de los eventos de ese usuario
                    $sql = 'SELECT * FROM tcartas WHERE id=1';
                    $result1 = mysqli_query($mysqli, $sql) or die('Query Error');
                    echo '<table class="default">';
                    echo '<tr>';
                    echo '<th>NOMBRE</th>';
                    echo '<th>RAREZA</th>';
                    echo '<th>IMAGEN</th>';
                    echo '</tr>';
                    #Recorremos $result1, almacenando los datos en un array
                    while ($row = mysqli_fetch_array($result1)) {
                        echo '<tr>';
                        #Mostramos los datos que queremos
                        echo '<td>' . $row['nombre'] . '</td>';
                        echo '<td>' . $row['rareza'] . '</td>';
                        echo '<td>' . $row['imagen'] . '</td>';
                        echo '</tr>';
                    }

                    echo '</table>';
                    #Cerramos la conexión
                    mysqli_close($mysqli);
                }

		?>

        </div>
    </div>
</body>
</html>