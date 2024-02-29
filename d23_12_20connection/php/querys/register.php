<?php
include_once('../connection.php');
if (isset($_POST['name']) && isset($_POST['born']) && isset($_POST['gender'])) {
  $genero = $_POST['gender'];
  $nome = $_POST['name'];
  $nascimento = $_POST['born'];
  $register = "INSERT INTO tbaluno (idgenero, nome, nascimento) VALUES (:genero, :nome, :nascimento)";
  $insert = $pdo->prepare($register);
  $insert->bindParam(':genero', $genero);
  $insert->bindParam(':nome', $nome);
  $insert->bindParam(':nascimento', $nascimento);
  $pdo->beginTransaction();
  $insert->execute();
  $pdo->commit();
  header('location: ../dashboard.php?page=aluno');
}
            