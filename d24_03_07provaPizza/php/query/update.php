<?php
require_once("../config/connection.php");
$conn = connection();
if (isset($_GET['idpizza'])) {
  $idgenero = $_GET['idpizza'];
  $sabor = $_POST['saborReg'];
  $tamanho = $_POST['tamanhoReg'];
  $valor = $_POST['valorReg'];
  $status = $_POST['status'];
  $update = $conn->prepare("UPDATE tbpizza SET sabor = :sabor,  status = :status WHERE idpizza = :idpizza");
  $update->bindValue(':idgenero', $idgenero);
  $update->bindValue(':sabor', $sabor);
  $update->bindValue(':tamanho', $tamanho);
  $update->bindValue(':valor', $valor);
  $conn->beginTransaction();
  $update->execute();
  $conn->commit();
  header("Location: ../adm.php?page=genero");
}
