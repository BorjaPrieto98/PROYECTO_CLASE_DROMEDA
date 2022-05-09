<?php
require __DIR__ . '/../php_util/db_connection.php';
session_start();
$mysqli = get_db_connection_or_die();
$user_id = $_SESSION['user_id'];
$id = $_GET['id'];

try {
    $sql = "DELETE FROM tuser_carta WHERE id_carta=".$id." AND id_user =".$user_id;
} catch (Exception $e) {
    error_log($e);
    header("Location: vender.php?venta_failed_unknown=True");
    exit();
}

header('Location: coleccion.php');
?>
