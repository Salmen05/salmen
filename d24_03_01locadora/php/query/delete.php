<?php
include_once("../../php/config/connection.php");
if (isset($_GET['idusuario'])) {
  $idusuario = $_GET['idusuario'];
  $conn = connection();
  $delete = $conn->prepare("DELETE FROM tbusuario WHERE idusuario = :idusuario");
  $delete->bindValue("idusuario", $idusuario, PDO::PARAM_INT);
  $conn->beginTransaction();
  $delete->execute();
  $conn->commit();
  header("Location: ../adm.php?page=usuario");
}
