<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/estilo_registro.css" type="text/css">
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
                <button type="button" class="btn" id="iniciar"><a href="registro.php" id="inicio">Registro</a></button>
                
            </div>
        </div>
        <div class="container" id="contenedor_registro">
            <div class="row" id="fila_texto">
                <div class="col">
                    <p id="texto_registro">LOGIN</p>
                </div>
            </div>

            <div class="row" id="fila_formulario">
                <div class="col">
                    <form action="do_login.php" method="POST" id="register">
                        <input class="form-control" type="text" placeholder="Email" name="email" id="email" required>
                        <input class="form-control" type="password" placeholder="Contraseña" name="contrasenha" id="contrasenha" required>
                        <button type="submit" class="btn" id="enviar"><b>Enviar</b></button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row" id="footer">
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
                <a href="pagina_principal.html">Inicio</a>
                <br>
                <a href="coleccion.php">Colección</a>
                <br>
                <a href="tienda.php">Tienda</a>
                <br>
                <a href="mercado.php">Mercado</a>
            </div>
        </div>
    </div>
    <script src="js/comprobacion_registro.js"></script>
</body>
</html>