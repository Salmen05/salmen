<?php
include_once("./config/conexao.php");
include_once("./config/constantes.php");
include_once("./func/funcoes.php");
$conn = conectar();

if (isset($_GET['idproduto'])) {
  $id = $_GET['idproduto'];
  $delete = "DELETE FROM produto WHERE idproduto = :id";
  $delete = $conn->prepare($delete);
  $delete->bindParam(':id', $id);
  $conn->beginTransaction();
  $delete->execute();
  $conn->commit();
  header('location:adm.php?page=produto');
}

if (isset($_GET['idusuario'])) {
    $id = $_GET['idusuario'];
    $delete = "DELETE FROM usuario WHERE idusuario = :id";
    $delete = $conn->prepare($delete);
    $delete->bindParam(':id', $id);
    $conn->beginTransaction();
    $delete->execute();
    $conn->commit();
    header('location:adm.php?page=usuario');
  }


  if (isset($_GET['idEndereço'])) {
    $id = $_GET['idEndereço'];
    $delete = "DELETE FROM endereco WHERE idendereco = :id";
    $delete = $conn->prepare($delete);
    $delete->bindParam(':id', $id);
    $conn->beginTransaction();
    $delete->execute();
    $conn->commit();
    header('location:adm.php?page=end');
  }

