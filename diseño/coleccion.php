<?php
    ini_set('display_errors', 'On');
    require __DIR__ . '/../php_util/db_connection.php';
    session_start();
    $mysqli = get_db_connection_or_die();
    $user_id = $_SESSION['user_id'];
    if(empty($user_id)){
        header('Location: error.php');
    }
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
        <div class="row" id="cabecera">
            <div class="col text-center" id="col_tienda">
                <a href="tienda.php" id="texto_menu">TIENDA</a>
            </div>
            <div class="col text-center" id="col_tienda">
                <a href="coleccion.php" id="texto_menu">COLECCIÓN</a>
            </div>
            <div class="col text-center" id="col_tienda">
                <a href="mercado.php" id="texto_menu">MERCADO</a>
            </div>
            <div class="col text-center">   
                <?php
                    $coin = 'SELECT coins, nombre_usuario FROM tuser WHERE id='.$user_id;
                    $rsl = mysqli_query($mysqli, $coin) or die('Query Error');
                    while ($row = mysqli_fetch_array($rsl)) {
                        echo '<p id="nombre">'.$row['nombre_usuario'].'</p>';
                        echo '<p id="coin">'.$row['coins'].' <img src="img/moneda.png" alt="img" width=20px id="moneda"/></p>';
                    }
                ?>
            </div>
            <div class="col text-center">
                <!-- <button type="submit" class="btn" id="iniciar"><b><a href="#" id="inicio">Logout</a></b></button> -->
                <button onclick="window.location.href='/logout.php'" class="btn" id="iniciar" style="color: white">Logout</button>
            </div>
        </div>
        <div class="row align-items-center" id="fila_imagenes">
            <div class="col text-center">
                <h1>TU COLECCIÓN</h1>
            </div>
        </div>
        <div class="container">
            <?php
                    #Comprobamos que la sesión no está vacía
                    if (empty($user_id)) {
                        header('Location: error.php?mensaje=Error');
                    } else {
                        echo '<br>';
                        echo '<br>';
                        echo '<br>';
                        echo '<br>';
                            #Creamos una variable que nos almacene toda la información de las cartas de ese usuario
                            $sql = 'SELECT tcartas.id, tcartas.imagen, tcartas.precio, tcartas.rareza, tuser_carta.id_user FROM tcartas INNER JOIN tuser_carta ON tcartas.id = tuser_carta.id_carta WHERE tuser_carta.id_user ='.$user_id.' ORDER BY tuser_carta.id_carta';
                            //$sql = 'SELECT tcartas.nombre, tcartas.rareza, tcartas.imagen, tcartas.precio, tcartas.id FROM tcartas INNER JOIN tuser_carta ON tcartas.id = tuser_carta.id_carta INNER JOIN tuser ON tuser_carta.id_user = '.$user_id;
                            $result1 = mysqli_query($mysqli, $sql) or die('Query Error');
                            #Recorremos $result1, almacenando los datos en un array
                            while ($row = mysqli_fetch_array($result1)) {
                                #Mostramos los datos que queremos
                                echo '<div class="row">
                                    <div class="col" style="text-align:center">
                                        <a href="carta.php?id='.$row['id'].'"><img src="' . $row['imagen'] . '" alt="imagen" id="carta" width="90%"/></a>
                                    </div> 
                                    <div class="col">
                                        <p id="rareza">TIPO: '.$row['rareza'].'</p>
                                        <br>
                                        <p id="rareza_precio">PRECIO: '.$row['precio'].' <img src="img/moneda.png" alt="img" width=20px id="moneda"/></p>
                                        <br>
                                        <a href="vender.php?id='.$row['id'].'" id="enlace_vender">VENDER</a>
                                        <br>
                                        <br>
                                        <br>
                                        </div>
                                   
                                </div>';                       
                            }
                        #Cerramos la conexión
                        mysqli_close($mysqli);
                    }
                ?>
        </div>
        <footer>
            <div class="row">
                <div class="col">
                    <h3>DROMEDA</h3>
                    <p>2022</p>
                </div>
                <div class="col">
                    <h4>Borja Prieto López</h4>
                    <p>648 68 38 80</p>
                </div>
                <div class="col">
                    <h4>MENÚ</h4>
                    <a href="coleccion.php">Colección</a>
                    <br>
                    <a href="tienda.php">Tienda</a>
                    <br>
                    <a href="mercado.php">Mercado</a>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>