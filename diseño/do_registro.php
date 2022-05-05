<?php
ini_set('display_errors', 'On');
require __DIR__ . '/../php_util/db_connection.php';

$mysqli = get_db_connection_or_die();

$name = $_POST['nombre_usuario'];
$email = $_POST['email'];
$pass = $_POST['contrasenha'];
$coins = 100;

try {
  $sql = "INSERT INTO tuser (email, nombre_usuario, encrypted_password, coins) VALUES (?, ?, ?, ?)";
  $stmt = $mysqli->prepare($sql);
  $stmt->bind_param("sssi", $email, $name, password_hash($pass, PASSWORD_BCRYPT), $coins);
  $stmt->execute();
  if (!empty($mysqli->error)) {
    header("Location: registro.php?register_failed_email=True");
    exit();
  }
  $stmt->close();
} catch (Exception $e) {
  error_log($e);
  header("Location: registro.php?register_failed_unknown=True");
  exit();
}

header("Location: registro.php?success=True");
