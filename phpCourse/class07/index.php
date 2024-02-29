<?php

declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=], initial-scale=1.0">
  <title>Briga dos mano</title>
</head>

<body>
  <h1>Ultra Emoji Combat</h1>
  <?php
  require_once("./php/classes/lutador.php");
  $lutador01 = new Lutador('Pretty Boy', 'França', 31, 1.75, 68.9, 11, 2, 1);
  $lutador02 = new Lutador('Puts Script', 'Brasil', 29, 1.68, 57.8, 14, 2, 3);
  $lutador03 = new Lutador('Snapshadow', 'Estados Unidos', 35, 1.65, 80.9, 12, 2, 1);
  $lutador04 = new Lutador('Dead Code', 'Austrália', 28, 1.93, 81.6, 13, 0, 2);
  $lutador05 = new Lutador('UFOcobol', 'Brasil', 37, 1.70, 119.3, 5, 4, 3);
  $lutador06 = new Lutador('Nerdaard', 'Estados Unidos', 30, 1.81, 105.7, 12, 2, 4);
  $lutador01->apresentar();
  $lutador01->empatarLuta();
  $lutador01->ganharLuta();
  $lutador01->perderLuta();
  $lutador01->status();
  ?>
  <br>
  <br>
  <?php
  $lutador02->apresentar();
  ?>
</body>

</html>