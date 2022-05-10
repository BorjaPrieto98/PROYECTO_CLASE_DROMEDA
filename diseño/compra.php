<?php
require __DIR__ . '/../php_util/db_connection.php';
session_start();
$mysqli = get_db_connection_or_die();
$user_id = $_SESSION['user_id'];
$id = $_GET['id'];
$cantidad = 1;

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
    $coins_up=$coins_user-$coin;
    if($coins_up<0){
      header('Location: tienda_sin_saldo.php');
    }else{
      $coins_update = "UPDATE tuser SET coins=".$coins_up." WHERE id=".$user_id;
      $result3 = mysqli_query($mysqli, $coins_update) or die('Query Error');

      $sql = "INSERT INTO tuser_carta (id_user, id_carta, cantidad) VALUES (?, ?, ?)";
      $stmt = $mysqli->prepare($sql);
      $stmt->bind_param("iii", $user_id, $id, $cantidad);
      $stmt->execute();
      
      if (!empty($mysqli->error)) {
        header("Location: compra.php?compra_failed=True");
        exit();
      }
      $stmt->close();
      header('Location: tienda_sin_saldo.php');
    }
    
} catch (Exception $e) {
    error_log($e);
    header("Location: compra.php?compra_failed_unknown=True");
    exit();
}


?>
