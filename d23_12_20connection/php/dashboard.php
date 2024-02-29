<?php
include_once('./connection.php');
session_start();
$nome =  $_SESSION['nome'];
function issetPage()
{
  if (isset($_GET['page'])) {
    return true;
  };
};
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Seso Senou</title>
  <link rel="icon" type="image/ico" sizes="16x16" href="/favicons/favicon-16x16.ico">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">
  <link rel="stylesheet" href="../css/bootstrap.css">
</head>

<body>

  <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
      <div style="display: flex; justify-content: center; align-items: center;">
        <div style="width: 65px; height: 65px;">
          <img src="../img/logo.png" class="img-fluid">
        </div>
        <h4 class="navbar-brand ms-2">Seso Senou</h4>
      </div>
      <div class="d-flex" style="align-items: center; justify-content: center">
        <h5 class="me-3"><?php echo ($nome); ?></h5>
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
                <a class="nav-link active aria-current=" page" href="./dashboard.php" style="border-bottom: 0.5px solid rgb(150, 150, 150)">Home</a>
              </li>
              <li>
                <a class="nav-link active" aria-current="page" href="?page=aluno">Alunos</a>
              </li>
              <li>
                <a class="nav-link active" aria-current="page" href="?page=professor">Professores</a>
              </li>
              <li>
                <a class="nav-link active" aria-current="page" href="?page=curso" style="border-bottom: 0.5px solid rgb(150, 150, 150)">Cursos</a>
              </li>
              <li>
                <a class="nav-link active" aria-current="page" href="../index.php">Sair</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <div>
    <?php if (issetPage() == true) {
      $page = $_GET['page'];
      if ($page == 'aluno') {
        include_once('./aluno.php');
      }else if ($page == 'professor'){
        include_once('./professor.php');
      }else if($page == 'curso'){
        include_once('./curso.php');
      }
    } ?>
  </div>
  <script src="../js/bootstrap.js"></script>
</body>

</html>