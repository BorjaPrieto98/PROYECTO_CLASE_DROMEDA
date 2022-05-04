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
        <div class="row" id="fila_menu">
            <div class="col text-center" id="col_tienda">
                <a href="#" id="texto_menu">TIENDA</a>
            </div>
            <div class="col text-start" id="col_tienda">
                <a href="coleccion.html" id="texto_menu">COLECCIÓN</a>
            </div>
            <div class="col text-center">
                <button type="button" class="btn" id="iniciar"><b><a href="login.html" id="inicio">Login</a></b></button>
            </div>
        </div>
        <div class="container" id="contenedor_registro">
            <div class="row" id="fila_texto">
                <div class="col">
                    <p id="texto_registro">REGISTRO</p>
                </div>
            </div>
            <?php
                if (isset($_GET['success'])) {
                    if ($_GET['success'] == TRUE) {
                        echo "<p>BRAVO! Nuevo usuario SEGURISIMO registrado con éxito 100% garantizado NO FAKE </p>";
                    }
                    }
                    if (isset($_GET['register_failed_email'])) {
                    if ($_GET['register_failed_email'] == TRUE) {
                        echo ("<p>Email ya registrado en base de datos</p>");
                    }
                    }
                    if (isset($_GET['register_failed_unknown'])) {
                    if ($_GET['register_failed_unknown'] == TRUE) {
                        echo ("<p>Fallo en el registro</p>");
                    }
                }
            ?>
            <div class="row" id="fila_formulario">
                <div class="col">
                    <form action="do_registro.php" method="POST" id="register">
                        <input class="form-control" type="text" placeholder="Email" name="email" id="email" required>
                        <input class="form-control" type="text" placeholder="Nombre de usuario" name="nombre_usuario" id="nombre_usuario" required>
                        <input class="form-control" type="password" placeholder="Contraseña" name="contrasenha" id="contrasenha" required>
                        <input class="form-control" type="password" placeholder="Repetir Contraseña" name="rep_contrasenha" id="rep_contrasenha" required>
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
                <a href="coleccion.html">Colección</a>
                <br>
                <a href="tienda.html">Tienda</a>
            </div>
        </div>
    </div>
    <script src="js/comprobacion_registro.js"></script>
</body>
</html>