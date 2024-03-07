<?php
require_once("./config/connection.php");
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pitsa</title>
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/style.css">
  <script src="../js/bootstrap.js" defer></script>
</head>

<body>
  <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
      <div style="width: 75px; display: flex">
        <img src="../img/logo.jpeg" class="img-fluid" style="display: inline;" alt="">
      </div>
      <div style="display: flex;">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation" class="display: inline;">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu Lateral</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li>
              <hr class="dropdown-dividder">
            </li>
            <li class="nav-item">
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Tabelas
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="adm.php?page=cliente">Clientes</a></li>
                <li><a class="dropdown-item" href="adm.php?page=pizza">Pizzas</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <div class="container">
    <?php
    if (isset($_GET['page'])) {
      switch ($_GET['page']) {
        case 'cliente':
          require_once("./table/cliente.php");
          break;
        case 'pizza':
          require_once("./table/pizza.php");
          break;
      }
    }
    ?>
  </div>
</body>