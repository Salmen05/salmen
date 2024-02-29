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

</head>

<body>

  <!-- Navbar -->
  <div class="mt-1">
    <center>Frete gratis em todas as compras para <b>membrosMOON</b></center>
  </div>
  <div class="container-fluid">
    <div class="collapse" id="navbarToggleExternalContent" data-bs-theme="white">
      <div class="bg-white p-4">
        <h5 class="text-body-emphasis h4">Nossos Produtos</h5>
        <center> <a href="lancamento.php" style="text-decoration:none;color:black"><span class="text-body-dark"><b>Lançamentos</b></span></a>
          <span class="text-body-secondary">ㅤㅤㅤ</span>
          <a href="oferta.php" style="text-decoration:none;color:black"><span class="text-body-dark"><b>Ofertas</b></span></a>
          <span class="text-body-secondary">ㅤㅤㅤ</span>
          <a href="masculino.php" style="text-decoration:none;color:black"><span class="text-body-dark"><b>Masculino</b></span></a>
          <span class="text-body-secondary">ㅤㅤㅤ</span>
          <a href="feminino.php" style="text-decoration:none;color:black"><span class="text-body-dark"><b>Feminino</b></span></a>
          <span class="text-body-secondary">ㅤㅤㅤ</span>
          <a href="infantil.php" style="text-decoration:none;color:black"><span class="text-body-dark"><b>Infantil</b></span></a>
        </center>
        <br>

        <center><a href="tenis.php"" style=" text-decoration:none"><span class="text-body-secondary">Tênis</span></a>
          <span class="text-body-secondary">ㅤㅤ</span>
          <a href="chinelos.php" style="text-decoration:none"><span class="text-body-secondary"> Chinelos</span></a>
          <span class="text-body-secondary">ㅤㅤ</span>
          <a href="calca.php" style="text-decoration:none"><span class="text-body-secondary"> Calças</span></a>
          <span class="text-body-secondary">ㅤㅤ</span>
          <a href="bermuda.php" style="text-decoration:none"><span class="text-body-secondary"> Bermudas</span></a>
          <span class="text-body-secondary">ㅤㅤ</span>
          <a href="saia.php" style="text-decoration:none"><span class="text-body-secondary"> Saias</span></a>
          <span class="text-body-secondary">ㅤㅤ</span>
          <a href="camisa.php" style="text-decoration:none"><span class="text-body-secondary"> Camisas</span></a>
          <span class="text-body-secondary">ㅤㅤ</span>
          <a href="blusa.php" style="text-decoration:none"><span class="text-body-secondary"> Blusas</span></a>
          <span class="text-body-secondary">ㅤㅤ</span>
          <a href="camiseta.php" style="text-decoration:none"><span class="text-body-secondary"> Camisetas</span></a>
          <span class="text-body-secondary">ㅤㅤ</span>
          <a href="cropped.php" style="text-decoration:none"><span class="text-body-secondary"> Croppeds</span></a>
          <span class="text-body-secondary">ㅤㅤ</span>
          <a href="casaco.php" style="text-decoration:none"><span class="text-body-secondary"> Casacos</span></a>
          <span class="text-body-secondary">ㅤㅤ</span>
          <a href="vestidos.php" style="text-decoration:none"><span class="text-body-secondary"> Vestidos</span></a>
          <span class="text-body-secondary">ㅤㅤ</span>
          <a href="chapeus.php" style="text-decoration:none"><span class="text-body-secondary"> Chapéus</span></a>
          
        </center>
      </div>
    </div>
    <nav class="navbar navbar-white bg-white">
      <div class="container-fluid ">
        <button class="navbar-toggler " type="button" data-bs-toggle="collapse" style="border-color:black" data-bs-target="#navbarToggleExternalContent " aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon "></span>
        </button>
        <a class="btn btn-outline-secondary" href="adm.php" style="text-decoration: none; color: black; <?php if ($adm == 'Cliente') {
                                                                                                          echo ('display: none');
                                                                                                        } ?>">ADM Page</a>
        <a class="btn btn-outline-danger" href="logout.php" style="text-decoration: none; color: black;"></span>Logout</a>
        
                                                                                                        
      </div>
    </nav>
  </div>


  <!-- Carroseul -->
  <div id="carouselExampleInterval" class="carousel slide mb-5" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="img/banner1.png" class="d-block w-100" alt="me bota na pasta burrao">
      </div>
      <div class="carousel-item" data-bs-interval="10000">
        <img src="img/banner2.png" class="d-block w-100" alt="me bota na pasta burrao">
      </div>
      <div class="carousel-item">
        <img src="img/banner4.png" class="d-block w-100" alt="me bota na pasta burrao">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- Ofertas -->


  <div class="container-fluid " style="margin-top:150px;margin-bottom:200px">
    <div class="row">
      <div class="col-md-3 col-sm-12 text-center" style="font-size:600%;margin-top:10%;font-family:Dancing Script, cursive">Ofertas</div>
      <div class="col-md-9 col-sm-12">
        <img src="img/banner3.png" alt="" srcset="" style="width:100%">
      </div>
    </div>
  </div>
  <div class="container">
    <hr>
  </div>
  <center>
    <!-- bolinhas -->
    <div class="container mt-5">
      <h1 class="text-center mb-3" style="font-size:500%;font-family:Dancing Script, cursive">Nossos Produtos</h1>
      <div class="row">
        <div class="col-md-2 col-sm-4 mb-3 card" style="border:none">
          <a href="blusa.php"><img src="img/produto/blusa/blusa1.jpg" class="rounded-circle " alt="..." style="height:150px;width: 150px;" title="blusa"></a>
        </div>
        <div class="col-md-2 col-sm-4 mb-3 card" style="border:none">
          <a href="bermuda.php"> <img src="img/produto/bermuda/bermuda1.jpg" class="rounded-circle " alt="..." style="height:150px;width: 150px;" title="bermuda"></a>
        </div>
        <div class="col-md-2 col-sm-4 mb-3 card" style="border:none">
          <a href="camisa.php"> <img src="img/produto/camisa/camisa1.jpg" class="rounded-circle " alt="..." style="height:150px;width: 150px;" title="camisa"></a>
        </div>
        <div class="col-md-2 col-sm-4 mb-3 card" style="border:none">
          <a href="chapeus.php"><img src="img/produto/chapeu/chapeu1.jpg" class="rounded-circle " alt="..." style="height:150px;width: 150px;" title="chapeu"></a>
        </div>
        <div class="col-md-2 col-sm-4 mb-3 card" style="border:none">
          <a href="cropped.php"> <img src="img/produto/croppeds/croppeds1.jpg" class="rounded-circle " alt="..." style="height:150px;width: 150px;" title="croppeds">
          </a>
        </div>
        <div class="col-md-2 col-sm-3 mb-3 card" style="border:none">
          <a href="saia.php"><img src="img/produto/saia/saia1.jpg" class="rounded-circle " alt="..." style="height:150px;width: 150px;"></a>
        </div>
      </div>
    </div>

    <!-- Center hr  -->
  </center>
  <div class="container" style="margin-top:65px">
    <hr>
  </div>

  <!-- Lançamentos -->

  <div class="container-fluid" style="margin-top:100px;margin-bottom:200px">
    <div class="row">
      <div class="col-md-7 col-sm-12">
        <img src="img/banner-5.png" alt="banner5" srcset="" style="width:100%">
      </div>
      <div class="col-md-5 col-sm-12 text-center" style="font-size:700%;margin-top:5%;font-family:Dancing Script, cursive">Lançamentos</div>

    </div>
  </div>     <!-- Footer -->
    <footer class="text-center text-lg-start bg-body-tertiary text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Desde 1998 inovando o estilo dos brasileiros.</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>
                            <center>Fashion Moon</center>
                        </h6>
                        <p>
                            A Fashion Moon tem como missão levar alegria, beleza e conforto para as suas clientes, através de peças que combinam com diferentes ocasiões e personalidades.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Ajuda
                        </h6>
                        <p>
                            <a href="duvidas.php" class="text-reset">Dúvidas Gerais</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Entregas</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Pedidos</a>
                        </p>
                        <p>
                            <a href="faleconosco.php" class="text-reset">Fale Conosco</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Opções
                        </h6>
                        <p>
                            <a href="sobrenos.php" class="text-reset">Sobre nós</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Configurações</a>
                        </p>
                        <p>
                            <a href="termos.php" class="text-reset">Termos de uso</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">produtos</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contato</h6>
                        <p><i class="fas fa-home me-3"></i> Rua Ivo de Tasis, jk 1 , 53</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            FashionMoon@gmail.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> + 55 (33)3101-9151</p>
                        <p><i class="fas fa-print me-3"></i> + 55 (33)3922-1202</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2024 Todos os direitos reservados:
            <a class="text-reset fw-bold" href="#">FashionMoon.com</a>
        </div>
        <!-- Copyright -->
    </footer>


  <script src=" https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  <?php
  if (isset($_GET['cad'])) {
    $foi = $_GET['cad'];
    if ($foi == 'sucesso') {
  ?><script defer>
        window.alert("Endereço enviado com sucesso.");
        window.alert("Seu pedido já está a caminho!");
      </script><?php
              }
            }
                ?>

</body>

</html>