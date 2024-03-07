<?php
require_once("../config/connection.php");
$conn = connection();
if (isset($_POST['cpf'])) {
  $options = [
    'cost' => 12
  ];
  $cpf =  $_POST['cpf'];
  $password = $_POST['password'];
  $hash = password_hash($password, PASSWORD_BCRYPT, $options);
  $insert = $conn->prepare("INSERT INTO tbcliente (cpf, senha) VALUES (:cpf, :senha)");
  $insert->bindParam(':cpf', $cpf);
  $insert->bindParam(':senha', $hash);
  $conn->beginTransaction();
  $insert->execute();
  $conn->commit();
  header("location: ../../index.php");
}
