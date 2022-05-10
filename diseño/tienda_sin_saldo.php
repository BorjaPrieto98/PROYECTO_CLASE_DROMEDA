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
                <a href="tienda.php" id="texto_menu">TIENDA</a>
            </div>
            <div class="col text-start" id="col_tienda">
                <a href="coleccion.php" id="texto_menu">COLECCIÓN</a>
            </div>
            <div class="col text-center">   
                <?php
                    $coin = 'SELECT coins, nombre_usuario FROM tuser WHERE id='.$user_id;
                    $rsl = mysqli_query($mysqli, $coin) or die('Query Error');
                    while ($row = mysqli_fetch_array($rsl)) {
                        echo '<p id="nombre">'.$row['nombre_usuario'].'</p>';
                        echo '<p id="coin">'.$row['coins'].' <img src="img/moneda.png" alt="img" width=20px/></p>';
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
                <h1>TIENDA</h1>
            </div>
        </div>
        <div class="container">
            <p id="saldo">No tienes saldo para comprar esa carta</p>
            <?php
                    #Comprobamos que la sesión no está vacía
                    if (empty($user_id)) {
                        header('Location: error.php?mensaje=Error');
                    } else {
                        $alt=rand(1, 5);
                        echo '<br>';
                        echo '<br>';
                        echo '<br>';
                        echo '<br>';
                            #Creamos una variable que nos almacene toda la información de los eventos de ese usuario
                            $sql = 'SELECT id, imagen, precio FROM tcartas WHERE id='.$alt;
                            $result1 = mysqli_query($mysqli, $sql) or die('Query Error');
                            #Recorremos $result1, almacenando los datos en un array
                            while ($row = mysqli_fetch_array($result1)) {
                                #Mostramos los datos que queremos
                                // echo '<div class="columnas" style="text-align:center">
                                //         <img src="' . $row['imagen'] . '" alt="imagen"/>
                                //         <p style="font-size: 20px; color: white">'.$row['precio'].' coins</p>
                                //     </div>';               
                                echo '<div class="row">
                                    <div class="col" style="text-align:center">
                                        <img src="' . $row['imagen'] . '" alt="imagen" style="margin-bottom: 100px"/>
                                    </div>
                                    <div class="col">
                                        <p id="rareza">PRECIO: '.$row['precio'].' <img src="img/moneda.png" alt="img" width=20px/></p>
                                        <br>
                                        <a href="compra.php?id='.$row['id'].'" id="enlace_compra">COMPRAR</a>
                                    </div>';           
                            }
                        #Cerramos la conexión
                        mysqli_close($mysqli);
                    }
                ?>
        </div>
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
                </div>
            </div>
        </footer>
</body>
</html>