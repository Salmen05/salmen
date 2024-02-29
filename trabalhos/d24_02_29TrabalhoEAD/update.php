<?php
include_once("./config/conexao.php");
include_once("./config/constantes.php");
include_once("./func/funcoes.php");
$conn = conectar();

if (isset($_POST['impidusuario'])) {
    $id = $_POST['impidusuario'];
    $adm = $_POST['impnivelusu'];
    $nome = $_POST['impnomeusu'];
    $email = $_POST['impemailusu'];
    $cpf = $_POST['impcpfusu'];
    $ativo = $_POST['impativousu'];
    $update = "UPDATE usuario SET idusuario = :idusuario, adm = :adm, nome = :nome, email = :email, cpf = :cpf, ativo = :ativo WHERE idusuario = :idusuario";
    $update = $conn->prepare($update);
    $update->bindParam(':idusuario', $id);
    $update->bindParam(':adm', $adm);
    $update->bindParam(':nome', $nome);
    $update->bindParam(':email', $email);
    $update->bindParam(':cpf', $cpf);  
    $update->bindParam(':ativo', $ativo); 
    $conn->beginTransaction();
    $update->execute();
    $conn->commit();
    header('location:adm.php?page=usuario');
  }
  

  
if (isset($_POST['impidprod'])) {
    $id = $_POST['impidprod'];
    $produto = $_POST['impprodprod'];
    $foto = $_POST['impfotoprod'];
    $tamanho = $_POST['imptamprod'];
    $descricao = $_POST['impdescprod'];
    $valor = $_POST['impvalorprod'];
    $cor = $_POST['impcorprod'];
    $genero = $_POST['impgeneprod'];
    $update = "UPDATE produto SET idproduto = :idproduto, produto = :produto, foto = :foto, tamanho = :tamanho, descricao = :descricao, valor = :valor, cor = :cor, genero = :genero WHERE idproduto = :idproduto";
    $update = $conn->prepare($update);
    $update->bindParam(':idproduto', $id);
    $update->bindParam(':produto', $produto);
    $update->bindParam(':foto', $foto);
    $update->bindParam(':tamanho', $tamanho);
    $update->bindParam(':descricao', $descricao);
    $update->bindParam(':valor', $valor);  
    $update->bindParam(':cor', $cor); 
    $update->bindParam(':genero', $genero); 
    $conn->beginTransaction();
    $update->execute();
    $conn->commit();
    header('location:adm.php?page=produto');
  }
  

  if (isset($_POST['impendeend'])) {
    $id = $_POST['impendeend'];
    $rua = $_POST['impruaend'];
    $bairro = $_POST['impbaiend'];
    $cidade = $_POST['impcidend'];
    $uf = $_POST['impufend'];
    $numero = $_POST['impnumeend'];
    $complemento = $_POST['impcompend'];
    $cep = $_POST['impcepend'];
    $ativo = $_POST['impativoend'];
    $update = "UPDATE endereco SET idendereco = :idendereco, rua = :rua, bairro = :bairro, cidade = :cidade, uf = :uf, numero = :numero, complemento 
    = :complemento, cep = :cep, ativo = :ativo WHERE idendereco = :idendereco";
    $update = $conn->prepare($update);
    $update->bindParam(':idendereco', $id);
    $update->bindParam(':rua', $rua);
    $update->bindParam(':bairro', $bairro);
    $update->bindParam(':cidade', $cidade);
    $update->bindParam(':uf', $uf);
    $update->bindParam(':numero', $numero);  
    $update->bindParam(':complemento', $complemento); 
    $update->bindParam(':cep', $cep); 
    $update->bindParam(':ativo', $ativo); 
    $conn->beginTransaction();
    $update->execute();
    $conn->commit();
    header('location:adm.php?page=end');
  }
  