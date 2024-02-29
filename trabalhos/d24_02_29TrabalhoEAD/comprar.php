<?php
session_start();
$id = $_SESSION['idusuario'];
$nome = $_SESSION['nome'];
$email = $_SESSION['email'];
$adm = $_SESSION['adm'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fashion Moon</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">

  <link rel="icon" type="image/png" sizes="16x16"  href="img/favicons/favicon-16x16.png">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">

  <script src="./js/bootstrap.js" defer></script>
  <script src="./js/apiEnderenco.js" defer></script>


</head>

<body>
  <nav class="navbar bg-body-secondary">
    <a class="navbar-brand" href="home.php">
      <div style="width: 100px; height: 100px;">
        <img src="./img/logo/logo1.png" alt="Bootstrap" class="img-fluid">
      </div>
    </a>
  </nav>

  <div>
    <img src="./img/banner/banner3.jpg" class="card-img-top" alt="">
  </div>
  <div class="container mt-3 mb-5">
    <h1 class="mb-4 text-center">Onde devemos entregar? </h1>
    <form action="redirect.php" method="post" class="row g-3">
      <div class="col-4">
        <label for="cep" class="form-label">CEP</label>
        <input type="text" class="form-control" id="cep" name="cep" maxlength="9" placeholder="Insira seu CEP" required="required">
      </div>
      <div class="col-md-5">
        <label for="logradouro" class="form-label">Logradouro</label>
        <input type="text" class="form-control" id="logradouro" name="logradouro" placeholder="Nome da sua rua" required="required">
      </div>
      <div class="col-md-3">
        <label for="numero" class="form-label">Número</label>
        <input type="text" class="form-control" id="numero" name="numero" placeholder="Número da sua casa" required="required">
      </div>
      <div class="col-md-4">
        <label for="bairro" class="form-label">Bairro</label>
        <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Nome do seu bairro" required="required">
      </div>
      <div class="col-md-6">
        <label for="localidade" class="form-label">Localidade</label>
        <input type="text" class="form-control" id="localidade" name="localidade" placeholder="Nome da sua cidade" required="required">
      </div>
      <div class="col-md-2">
        <label for="uf" class="form-label">UF</label>
        <input type="text" class="form-control" id="uf" name="uf" placeholder="Sigla do Estado" required="required">
      </div>
      <div class="col-md-12">
        <label for="complementos" class="form-label">Complemento</label>
        <input type="text" class="form-control" id="complementos" name="complementos" placeholder="Inofrmações adicionais sobre sua moradia">
      </div>
      <button type="submit" class="btn btn-success">Adicionar endereço e comprar</button>
    </form>
  </div>
  <script defer>
  </script>

</body>