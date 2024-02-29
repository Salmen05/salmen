<?php
session_start();
include_once('connection.php');
$nome = $_POST['name'];
$senha = $_POST['password'];
$result = $pdo->query("SELECT * FROM tblogin WHERE usuario = '$nome' AND senha = '$senha'")->fetchAll();
$contando = count($result);
if ($contando > 0) {
  $_SESSION['nome'] = $nome;
  header('location: ./dashboard.php');
} else {
  header('location: ../index.php?page=failed');
}
