<?php

declare(strict_types=1);
require_once("./php/config/connection.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Retorno</title>
  <link rel="stylesheet" href="./css/bootstrap.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">
</head>

<body>
  <header>
    <nav class="navbar bg-body-tertiary mb-3">
      <div class="container-fluid">
        <div style="display: flex; justify-content: center; align-items: center;">
          <div style="width: 65px; height: 65px;">
            <img src="./img/logo.png" class="img-fluid">
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
                  <a class="nav-link active aria-current=" page" href="#" style="border-bottom: 0.5px solid rgb(150, 150, 150)">Home</a>
                </li>
                <h5 class="text-center mt-2">Tabelas</h5>
                <li>
                  <a class="nav-link active" aria-current="page" href="./php/adm.php?page=cliente">• Cliente</a>
                </li>
                <li>
                  <a class="nav-link active" aria-current="page" href="./php/adm.php?page=filme">• Filme</a>
                </li>
                <li>
                  <a class="nav-link active" aria-current="page" href="./php/adm.php?page=genero" style="border-bottom: 0.5px solid rgb(150, 150, 150)">• Gênero</a>
                </li>
                <h5 class="text-center mt-2">Categorias</h5>
                <li>
                  <a class="nav-link active" aria-current="page" href="#">• Ação</a>
                </li>
                <li>
                  <a class="nav-link active" aria-current="page" href="#">• sla</a>
                </li>
                <li>
                  <a class="nav-link active" aria-current="page" href="#">• sla</a>
                </li>
                <li>
                  <a class="nav-link active" aria-current="page" href="#">• sla</a>
                </li>
                <li>
                  <a class="nav-link active" aria-current="page" href="#" style="border-bottom: 0.5px solid rgb(150, 150, 150)">• sla</a>
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
  <div id="carouselExample" class="carousel slide mt-3">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./img/banner/nfsBanner.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="./img/banner/upBanner.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="./img/banner/zombielandBanner.jpg" class="w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="container mt-3">
    <div class="card text-center">
      <div class="card-header">
        <h4>Todos os filmes</h4>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="card-body">
            <div class="card">
              <img src="./img/logo.png" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="./js/bootstrap.js"></script>
</body>

</html>