<?php
include_once("./config/conexao.php");
include_once("./func/funcoes.php");
include_once("./config/constantes.php");
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$impemail = $dados['impemail'];
$impsenha = $dados['impsenha'];
$options = [
  'cost' => 12
];
$senhaHash = password_hash($impsenha, PASSWORD_BCRYPT, $options);
$retornoValidar = validarSenhaCriptografia('idusuario, adm, nome, email, senha, cpf, ativo', 'usuario', 'email', 'senha', $impemail, $impsenha, 'ativo', 'A');
if ($retornoValidar) {
  if ($retornoValidar == 'usuario') {
    echo json_encode(['success' => false, 'message' => 'Usúario Inválido!']);
  } else if ($retornoValidar == 'senha') {
    echo json_encode(['success' => false, 'message' => 'Senha incorreta!', 'sla' => $retornoValidar]);
  } else {
    $_SESSION['idusuario'] = $retornoValidar->idusuario;
    $_SESSION['nome'] = $retornoValidar->nome;
    $_SESSION['email'] = $retornoValidar->email;
    $_SESSION['adm'] = $retornoValidar->adm;
    echo json_encode(['success' => true, 'message' => 'Logado com sucesso!', 'sla' => $retornoValidar]);
  }
}
