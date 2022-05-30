<?php
require __DIR__ . '/../php_util/db_connection.php';
session_start();
$mysqli = get_db_connection_or_die();
$user_id = $_SESSION['user_id'];
$alt=rand(1, 5);
$coin=30000;
$cantidad=1;

try {
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

        $sobre="SELECT id FROM tcartas WHERE rareza='Dios' ORDER BY RAND () LIMIT 1";
        $result= mysqli_query($mysqli, $sobre) or die('Query Error');
        while ($row = mysqli_fetch_array($result)) {
        #Mostramos los datos que queremos
            $id=$row['id'];                         
        }

        $sql = "INSERT INTO tuser_carta (id_user, id_carta, cantidad) VALUES (?, ?, ?)";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("iii", $user_id, $id, $cantidad);
        $stmt->execute();
      
        if (!empty($mysqli->error)) {
            header("Location: compra.php?compra_failed=True");
            exit();
        }

        $stmt->close();
        
        header('Location: abrir_normal.php?id='.$id);
    }
    
} catch (Exception $e) {
    error_log($e);
    header("Location: compra.php?compra_failed_unknown=True");
    exit();
}


?>
