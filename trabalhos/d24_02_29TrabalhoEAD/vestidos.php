<?php
include_once("config/conexao.php");
include_once("config/constantes.php");
include_once("func/funcoes.php");
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
    <center>Frete gratis em todas as compras para <b>membrosMOON</b> </center>
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
      </div>
    </nav>
  </div>


  <!-- Container Principal -->
  <div class="container">
    <div class="row justify-content-md-center">
      <!-- <h2 class="text-center">Estilo Masculino</h2> -->
      <?php
      $listaProduto = listarTabela('idproduto, foto, produto, tamanho, descricao, valor, cor, genero', 'produto', 'idproduto');
      if ($listaProduto != 'Vazio') {
        foreach ($listaProduto as $produtoRetorno) {
          $foto = $produtoRetorno->foto;
          $produto = $produtoRetorno->produto;
          $tamanho = $produtoRetorno->tamanho;
          $descricao = $produtoRetorno->descricao;
          $valor = $produtoRetorno->valor;
          $cor = $produtoRetorno->cor;
          $genero = $produtoRetorno->genero;
          if ($produto == 'vestido') {
      ?>
            <div class="col-md-3 col-sm-6 mt-3">
              <div class="card">
                <img src="./img/produto/vestidos/<?php echo $foto ?>" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $descricao ?></h5>
                  <p class="card-text">R$: <b><?php echo $valor ?></b></p>
                  <a href="./comprar.php" class="btn btn-success">Comprar</a>
                </div>
              </div>
            </div>
      <?php
          }
        }
      }
      ?>
    </div>
  </div>


      <!-- Footer -->
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
</body>

</html>