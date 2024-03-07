<?php
require_once("../config/connection.php");
$conn = connection();
if (isset($_GET['idpizza'])) {
  $idpizza = $_GET['idpizza'];
  $delete = $conn->prepare("DELETE FROM tbpizza WHERE idpizza = :idpizza");
  $delete->bindParam(":idpizza", $idpizza);
  $conn->beginTransaction();
  $delete->execute();
  $conn->commit();
  header("location: ../adm.php?page=pizza");
}
