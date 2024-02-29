<?php

function insert($fab, $mod, $year, $color, $photo, $size)
{
  global $carro;
  $carro[] =
    [
      'Fabricante' => $fab,
      'Modelo' => $mod,
      'Ano' => $year,
      'Cor' => $color,
      'Foto' => $photo,
      'Tamanho' => $size
    ];
  return $carro;
};
$carro = [
  [
    'Fabricante' => 'Chevrollet',
    'Modelo' => 'Corvette C8',
    'Ano' => '2022',
    'Cor' => 'Vermelho',
    'Foto' => 'Chevrolet/Corvette C8.jpg',
    'Tamanho' => 'S'
  ]
];
$fabricante = 'Henessey';
$modelo = 'Venom GT';
$ano = '2017';
$cor = 'Prata';
$tamanho = 'S';
$photo = $fabricante . '/' . $modelo . '.jpg';
insert($fabricante, $modelo, $ano, $cor, $photo, $tamanho);
$fabricante = 'Lamborghini';
$modelo = 'Sesto Elemento';
$ano = '2018';
$cor = 'Preto';
$size = 'S';
$photo = $fabricante . '/' . $modelo . '.jpg';
insert($fabricante, $modelo, $ano, $cor, $photo, $tamanho);
$fabricante = 'Koenigsegg';
$modelo = 'Jesko';
$ano = '2020';
$cor = 'Prata';
$tamanho = 'S';
$photo = $fabricante . '/' . $modelo . '.jpg';
insert($fabricante, $modelo, $ano, $cor, $photo, $tamanho);
$fabricante = 'Ford';
$modelo = 'GT';
$ano = '2015';
$cor = 'Branco';
$tamanho = 'L';
$photo = $fabricante . '/' . $modelo . '.jpg';
insert($fabricante, $modelo, $ano, $cor, $photo, $tamanho);
$fabricante = 'Dodge';
$modelo = 'Viper';
$ano = '2017';
$cor = 'Preto';
$tamanho = 'L';
$photo = $fabricante . '/' . $modelo . '.jpg';
insert($fabricante, $modelo, $ano, $cor, $photo, $tamanho);
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset=" UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shift</title>
  <link rel="stylesheet" href="./css/bootstrap.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">SHIFT</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="registrar.php">Registrar um carro</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <div id="banner">
    <img class="img-fluid" src="./img/banner.jpeg">
  </div>
  <div class="container-fluid mt-3">
    <div class="row">
      <?php
      foreach ($carro as $itemcarro) {
        $fabricante = $itemcarro['Fabricante'];
        $modelo = $itemcarro['Modelo'];
        $ano = $itemcarro['Ano'];
        $cor = $itemcarro['Cor'];
        $photo = $itemcarro['Foto'];
        if ($itemcarro['Tamanho'] == 'S') {
      ?>
          <div class="col-md-3 col-sm-6 mb-3">
            <div class="card">
              <img src="./img/<?php echo $photo ?>" class="card-img-top">
              <div class="card-body">
                <p class="card-text"><b>Fabricante:</b> <?php echo $fabricante ?></p>
                <p class="card-text"><b>Modelo:</b> <?php echo $modelo ?></p>
                <p class="card-text"><b>Ano:</b> <?php echo $ano ?></p>
                <p class="card-text"><b>Cor:</b> <?php echo $cor ?></p>
              </div>
            </div>
          </div>
        <?php
        } else if ($itemcarro['Tamanho'] == 'L') {
        ?>
          <div class="col-md-6 col-sm-12 mb-3">
            <div class="card">
              <img src="./img/<?php echo $photo ?>" class="card-img-top">
              <div class="card-body">
                <p class="card-text"><b>Fabricante:</b> <?php echo $fabricante ?></p>
                <p class="card-text"><b>Modelo:</b> <?php echo $modelo ?></p>
                <p class="card-text"><b>Ano:</b> <?php echo $ano ?></p>
                <p class="card-text"><b>Cor:</b> <?php echo $cor ?></p>
              </div>
            </div>
          </div>
      <?php
        }
      }
      ?>
    </div>
  </div>
  <script src="./js/bootstrap.js"></script>
</body>

</html>