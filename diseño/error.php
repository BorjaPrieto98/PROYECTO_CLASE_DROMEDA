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
            <div class="col text-center" id="col_tienda">
                <a href="coleccion.php" id="texto_menu">COLECCIÓN</a>
            </div>
            <div class="col text-center" id="col_tienda">
                <a href="mercado.php" id="texto_menu">MERCADO</a>
            </div>
            <div class="col text-center">
                <!-- <button type="submit" class="btn" id="iniciar"><b><a href="#" id="inicio">Logout</a></b></button> -->
                <button onclick="window.location.href='/login.php'" class="btn" id="iniciar" style="color: white">Login</button>
            </div>
        </div>
        <div class="row align-items-center" id="fila_imagenes">
            <div class="col text-center">
                
            </div>
        </div>
        <div class="container">
            <h1>PARA PODER ACCEDER A ESTA SECCIÓN DEBES INICIAR SESIÓN</h1>
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
                    <a href="mercado.php">Tienda</a>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>