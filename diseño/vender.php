<?php
require __DIR__ . '/../php_util/db_connection.php';
session_start();
$mysqli = get_db_connection_or_die();
$user_id = $_SESSION['user_id'];
$id = $_GET['id'];

try {
    $coins ="SELECT precio FROM tcartas WHERE id =".$id;
    $result1 = mysqli_query($mysqli, $coins) or die('Query Error');
    while ($row = mysqli_fetch_array($result1)) {
        #Mostramos los datos que queremos
        $coin=(int)$row['precio'];                         
    }
    $coins_user = "SELECT coins FROM tuser WHERE id=".$user_id;
    $result2 = mysqli_query($mysqli, $coins_user) or die('Query Error');
    while ($row = mysqli_fetch_array($result2)) {
        #Mostramos los datos que queremos
        $coins_user=(int)$row['coins'];                         
    }
    $coins_up=$coin + $coins_user;
    $coins_update = "UPDATE tuser SET coins=".$coins_up." WHERE id=".$user_id;
    $result3 = mysqli_query($mysqli, $coins_update) or die('Query Error');
    $sql = "DELETE FROM tuser_carta WHERE id_carta=".$id." AND id_user =".$user_id;
    $result4 = mysqli_query($mysqli, $sql) or die('Query Error');
} catch (Exception $e) {
    error_log($e);
    header("Location: coleccion.php?venta_failed_unknown=True");
    exit();
}

header('Location: coleccion.php');
?>
