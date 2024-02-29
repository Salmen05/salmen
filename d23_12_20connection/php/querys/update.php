<?php
include_once('../connection.php');
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $nome = $_POST['nameUP'];
  $genero = $_POST['genderUP'];
  $nascimento = $_POST['bornUP'];
  $ativo = $_POST['active'];
  $update = "UPDATE tbaluno SET nome = :nome, idgenero = :genero, nascimento = :nascimento, ativo = :ativo WHERE idaluno = :id";
  $update = $pdo->prepare($update);
  $update->bindParam(':nome', $nome);
  $update->bindParam(':genero', $genero);
  $update->bindParam(':nascimento', $nascimento);
  $update->bindParam(':ativo', $ativo);
  $update->bindParam(':id', $id);  
  $pdo->beginTransaction();
  $update->execute();
  $pdo->commit();
  header('location: ../dashboard.php?page=aluno');
}