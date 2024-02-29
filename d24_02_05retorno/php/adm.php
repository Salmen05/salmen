<?php

declare(strict_types=1);
require_once("./config/connection.php");
session_start();
function pageSet(): bool
{
  if (isset($_GET['page'])) {
    return true;
  }
}
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Retornando</title>
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="icon" type="../image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">
</head>

<body>
  <header>
    <nav class="navbar bg-body-tertiary mb-3">
      <div class="container-fluid">
        <div style="display: flex; justify-content: center; align-items: center;">
          <div style="width: 65px; height: 65px;">
            <img src="../img/logo.png" class="img-fluid">
          </div>
          <h4 class="navbar-brand ms-2">Seso Senou</h4>
        </div>
        <div class="d-flex" style="align-items: center; justify-content: center">
          <h5 class="me-3">user</h5>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu lateral</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active aria-current=" page" href="../index.php" style="border-bottom: 0.5px solid rgb(150, 150, 150)">Home</a>
                </li>
                <h5 class="text-center mt-2">Tabelas</h5>
                <li>
                  <a class="nav-link active" aria-current="page" href="./adm.php?page=cliente">• Cliente</a>
                </li>
                <li>
                  <a class="nav-link active" aria-current="page" href="./adm.php?page=filme">• Filme</a>
                </li>
                <li>
                  <a class="nav-link active" aria-current="page" href="./adm.php?page=genero" style="border-bottom: 0.5px solid rgb(150, 150, 150)">• Gênero</a>
                </li>
                <h5 class="text-center mt-2">Categorias</h5>
                <li>
                  <a class="nav-link active" aria-current="page" href="#">• Ação</a>
                </li>
                <li>
                  <a class="nav-link active" aria-current="page" href="#">• Terror</a>
                </li>
                <li>
                  <a class="nav-link active" aria-current="page" href="#">• Comédia</a>
                </li>
                <li>
                  <a class="nav-link active" aria-current="page" href="#">• Suspense</a>
                </li>
                <li>
                  <a class="nav-link active" aria-current="page" href="#" style="border-bottom: 0.5px solid rgb(150, 150, 150)">• Romance</a>
                </li>
                <li>
                  <a class="nav-link active" aria-current="page" href="#">Sair</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <?php
  if (pageSet()) {
    $page = $_GET['page'];
    switch ($page) {
      case 'cliente':
        require_once('./cliente.php');
        break;
      case 'filme':
        require_once('./filme.php');
        break;
      case 'genero':
        require_once('./genero.php');
        break;
    }
  }
  ?>
  <script src="../js/bootstrap.js"></script>
</body>

</html>