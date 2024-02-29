<?php
include_once('../connection.php');
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $delete = "DELETE FROM tbaluno WHERE idaluno = :id";
  $delete = $pdo->prepare($delete);
  $delete->bindParam(':id', $id);
  $pdo->beginTransaction();
  $delete->execute();
  $pdo->commit();
  header('location: ../dashboard.php?page=aluno');
}
