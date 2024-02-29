<?php
session_start();
if (isset($_SESSION['name']) && isset($_SESSION['cargo'])) {
  $name = $_SESSION['name'];
  $cargo = $_SESSION['cargo'];
}
function sessionVerify()
{
  if (isset($_SESSION['name']) && isset($_SESSION['cargo'])) {
    return true;
  }
}
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/bootstrap.css">
  <link rel="stylesheet" href="./css/style.css">
  <title>Document</title>
</head>

<body>
  <header>
    <div id="navBar">
      <div class="ms-2" style="width: 50px; height: 50px;">
        <img src="./img/logo.png" class="img-fluid" style="border-radius: 7px;">
      </div>
      <div style=" width: 100%; display: flex; justify-content: space-between;">
        <h3 class="ms-3"><?php if (sessionVerify() == true) {
                            echo $cargo;
                          } else {
                            echo '404';
                          }
                          ?>
        </h3>
        <h3><?php if (sessionVerify() == true) {
              echo $name;
            } else {
              echo '404';
            } ?></h3>
      </div>
      <nav class="navbar">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header" style="background-color: rgb(25, 25, 25);">
              <h5 class=" offcanvas-title" id="offcanvasNavbarLabel">Dashboard</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
                </li>
                <hr>
                <li class="nav-item">
                  <a class="nav-link active" href="dashboard.php?page=adm" <?php if (sessionVerify() == true) {
                                                                              if (($cargo == 'Cliente')) {
                                                                                echo 'style="display: none;"';
                                                                              }
                                                                            } ?>> Registros </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="dashboard.php?page=produto">Produtos</a>
                </li>
                <hr>
                <li class="nav-item">
                <a class="nav-link active" href="index.php">Sair</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <?php if (isset($_GET['page'])) {
    if ($_GET['page'] == 'adm') {
      include_once('adm.php');
    } else if ($_GET['page'] == 'produto') {
      include_once('produto.php');
    }
  } else {
  ?>
    <div style="display: flex; justify-content: center; margin-top: 180px;">
      <h1 style="font-size: 300px;">Bem-vindo!</h1>
    </div>
  <?php
  } ?>
  <script src="./js/bootstrap.js"></script>
</body>

</html>