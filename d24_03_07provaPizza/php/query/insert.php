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
if (isset($_POST['cpfAdm'])) {
  $options = [
    'cost' => 12
  ];
  $cpf =  $_POST['cpfAdm'];
  $password = $_POST['passwordAdm'];
  $hash = password_hash($password, PASSWORD_BCRYPT, $options);
  $insert = $conn->prepare("INSERT INTO tbcliente (cpf, senha) VALUES (:cpf, :senha)");
  $insert->bindParam(':cpf', $cpf);
  $insert->bindParam(':senha', $hash);
  $conn->beginTransaction();
  $insert->execute();
  $conn->commit();
  header("location: ../adm.php?page=cliente");
}
if (isset($_POST['sabor'])) {
  $sabor = $_POST['sabor'];
  $tamanho = $_POST['tamanho'];
  $valor = $_POST['valor'];
  $insert = $conn->prepare("INSERT INTO tbpizza (sabor, tamanho, valor) VALUES (:sabor, :tamanho, :valor)");
  $insert->bindParam(':sabor', $sabor);
  $insert->bindParam(':tamanho', $tamanho);
  $insert->bindParam(':valor', $valor);
  $conn->beginTransaction();
  $insert->execute();
  $conn->commit();
  header("location: ../adm.php?page=pizza");
}
