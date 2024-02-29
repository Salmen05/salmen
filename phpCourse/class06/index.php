<?php

declare(strict_types=1)
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Controle Remoto</title>
</head>

<body>
  <h1>Interface de controle remoto</h1>
  <?php
  require_once('./classes/ControleRemoto.php');
  $c1 = new ControleRemoto;
  $c1->ligar();
  $c1->ligarMudo();
  $c1->desligarMudo();
  $c1->maisVolume();
  $c1->maisVolume();
  $c1->maisVolume();
  $c1->maisVolume();
  $c1->menosVolume();
  $c1->ligarMudo();
  $c1->desligarMudo();
  $c1->menosVolume();
  $c1->play();
  $c1->pause();
  $c1->desligar();
  $c1->maisVolume();
  $c1->menosVolume();
  $c1->ligarMudo();
  $c1->desligarMudo();
  $c1->abrirMenu();
  $c1->fecharMenu();
  ?>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <?php
  echo ('<pre>');
  var_dump($c1);
  echo ('</pre>');
  ?>
</body>

</html>