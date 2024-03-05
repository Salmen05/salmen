<?php
include_once("./connection.php");
global $email;
global $senha;
$options = [
  'cost' => 12
];
$senhaHash = password_hash($senha, PASSWORD_BCRYPT, $options);
function retornoValidar()
{
  $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
  $email = $dados['email'];
  $senha = $dados['senha'];
  try {
    $conn = connection();
    $select = $conn->prepare("SELECT nome, senha FROM tbusuario WHERE email = :email AND senha = :senha");
    $select->bindValue(':email', $email);
    $select->bindValue(':senha', $senha);
    $conn->beginTransaction();
    $select->execute();
    $conn->commit();
    if ($select->rowCount() > 0) {
      $sqlReturn = $select->fetch(PDO::FETCH_OBJ);
      var_dump($sqlReturn);
      $senhaHash = $sqlReturn->senha;
      if (password_verify($senha, $senhaHash)) {
        return $sqlReturn;
      }
      return 'senha';
    } else {
      return 'nome';
    }
  } catch (PDOException $e) {
    echo ('ERROR - ' . $e->getMessage());
    $conn->rollBack();
  }
}
$retornoValidar = retornoValidar();
if ($retornoValidar) {
  if ($retornoValidar == 'nome') {
    echo json_encode(['success' => false, 'message' => 'Usuário Inválido!']);
  } else if ($retornoValidar == 'senha') {
    echo json_encode(['success' => false, 'message' => 'Senha Incorreta!']);
  } else {
    $_SESSION['idusuario'] = $retornoValidar->idusuario;
    $_SESSION['nome'] = $retornoValidar->nome;
    $_SESSION['email'] = $retornoValidar->email;
    $_SESSION['nivel'] = $retornoValidar->nivel;
    echo json_encode(['success' => true, 'message' => 'Logado com sucesso!']);
  }
}
