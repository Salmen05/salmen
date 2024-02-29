<?php
session_start();
$_SESSION['name'] = $_POST['name'];
$senha = md5($_POST['password']);
switch ($senha) {
  case '827ccb0eea8a706c4c34a16891f84e7b':
    $_SESSION['cargo'] = 'Admininastror';
    header('location: dashboard.php');
    break;
  case '01cfcd4f6b8770febfb40cb906715822':
    $_SESSION['cargo'] = 'Cliente';
    header('location: dashboard.php');
    break;
  case '979d472a84804b9f647bc185a877a8b5':
    $_SESSION['cargo'] = 'Usuário';
    header('location: dashboard.php');
    break;
    default:
    header('location: index.php?page=faield.php');
    break;
  }
?>
