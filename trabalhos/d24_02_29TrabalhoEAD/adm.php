<?php
include_once("./config/conexao.php");
include_once("./config/constantes.php");
include_once("./func/funcoes.php");
$adm = $_SESSION['adm'];
if (($adm == 'Adm') || ($adm == 'Usuario')) {
  $nome = $_SESSION['nome'];
} else {
  session_destroy();
  header("location: ./index.php?error=404");
  die();
}
$conn = conectar();
$nome = $_SESSION['nome'];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fashion Moon</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="./css/css.css">

  <link rel="icon" type="image/png" sizes="16x16"  href="img/favicons/favicon-16x16.png">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">


  <style>
    body {
      background-color: #1d1a1a;
      color: white;
    }

    a {
      text-decoration: none;
      color: white;
    }
  </style>
</head>

<body>
  <div class="card" style="border: none;">
  </div>
  <nav class="navbar navbar-expand-lg bg-secondary">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="index.php">
        <img src="./img/logo/logo1.png" alt="logo" width="50px">
      </a>
      <div class="card-body text-center bg-secondary">
        <b>Painel de Controle</b>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent" style="flex-grow:0!important;margin-right:3%">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <div class="container">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo $nome ?>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Minha Conta</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="exSession.php"><button class="btn btn-outline-danger">Sair</button></a></li>
              </ul>
            </li>
          </div>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container-fluid">
    <div class="row flex-nowrap">
      <div class="col-auto col-md-2 col-xl-2 px-sm-2 px-0 bg-dark">
        <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
          <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <span class="fs-5 d-none d-sm-inline">Menu</span>
          </a>
          <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
            <li class="nav-item">
              <a href="home.php" class="nav-link align-middle px-0 text-white">
                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
              </a>
            </li>
            <li>
            </li>
            <li>
              <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-white ">
                <i class="bi bi-vector-pen"></i> <span class="ms-1 d-none d-sm-inline">Cadastrados</span></a>
              <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                <li>
                  <a href="adm.php?page=produto" class="nav-link px-0 text-white" onclick="carregarConteudo()"> <i class="fs-4 bi-table"></i> <span class="d-none d-sm-inline">Produtos</span></a>
                </li>
                <li>
                  <a href="adm.php?page=usuario" class="nav-link px-0 text-white" onclick="carregarConteudo()"> <i class="fs-4 bi-people"></i> <span class="d-none d-sm-inline">Usuários</span></a>
                </li>
                <li>
                  <a href="adm.php?page=end" class="nav-link px-0 text-white" onclick="carregarConteudo()"> <i class="bi bi-signpost"></i> <span class="d-none d-sm-inline">Endereço</span></a>
                </li>
              </ul>
            </li>
          </ul>
          <hr>
        </div>
      </div>
      <div class="col-10 py-3 bg-light text-dark">
        <?php
        if (isset($_GET['page']) && !empty($_GET['page'])) {
          $page = $_GET['page'];
          if ($page == 'usuario') {
            include_once 'usuario.php';
          } else if ($page == 'produto') {
            include_once 'produto.php';
          }  else if ($page == 'end') {
            include_once 'end.php';
          }
        } else {
          echo "<center><h1>Bem vindo, $nome</h1></center>";
          // echo "
          // <div class='card border border-2 
          //      border-dark p-1 text-white rounded-4 text-center' style='background-color: #0e0d0dc0;width:30%'>
          //         <div id='dataHora' class='bg-dark rounded-3'><span><i class='bi bi-calendar-week-fill mb-2'></i></span>
          //             <span id='dataHoraTexto'> </span><span id='HoraTexto'></span>
          //         </div>
          //     </div>
          // ";
        }
        ?>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>
  <script src="./js/formatacoes.js"></script>
  <script src="./js/js.js"></script>
</body>

</html>