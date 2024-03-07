<?php
include_once("./connection.php");
$POST = filter_input_array(INPUT_POST);
$cpf = $POST['cpf'];
$password = $POST['password'];
$conn = connection();
$options = ['cost' => 12];
try {
  $select = $conn->prepare("SELECT idcliente, cpf, senha FROM tbcliente WHERE cpf = :cpf");
  $select->bindValue(":cpf", $cpf);
  $conn->beginTransaction();
  $select->execute();
  $conn->commit();
  if ($select->rowCount() > 0) {
    $select = $select->fetch(PDO::FETCH_ASSOC);
    if (password_verify($password, $select['senha'])) {
      $result = $select;
    } else {
      $result = 'senha';
    }
  } else {
    $result = 'cpf';
  }
} catch (PDOException $e) {
  echo ('ERROR - ' . $e->getMessage());
  $conn->rollBack();
}
if (isset($result)) {
  ob_start();
  switch ($result) {
    case 'cpf':
      $response = ['success' => false, 'message' => 'CPF Inválido!'];
      break;
    case 'senha':
      $response = ['success' => false, 'message' => 'Senha incorreta!'];
      break;
    default:
      session_start();
      $_SESSION['idcliente'] = $select['idcliente'];
      $_SESSION['cpf'] = $select['cpf'];
      $response = ['success' => true, 'message' => 'Logado com sucesso!'];
      break;
  }
  header('Content-Type: application/json');
  echo json_encode($response);
  ob_end_flush();
}
