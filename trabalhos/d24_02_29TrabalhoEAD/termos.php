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

    <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

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


    <div class="container">
            <p><b>Termos de Uso</b> - FashionMoon</p>
            <br>
            <p>Bem-vindo(a) ao FashionMoon! Pedimos que leia cuidadosamente os seguintes Termos de Uso antes de utilizar nosso site. Ao acessar ou usar nossos serviços, você concorda em seguir e aceitar estes termos. Se você não concordar com algum destes termos, por favor, não utilize o FashionMoon.</p>

            <br>
            <p><b>Uso do Site:</b></p>
            <p>1.1 Ao utilizar o FashionMoon, você concorda em fornecer informações precisas e completas durante o processo de cadastro.</p>
            <p>1.2 É proibido o uso do site para atividades ilegais ou não autorizadas.</p>
            <br>
            <p><b>Compra e Pagamento:</b></p>
            <p>2.1 Ao realizar uma compra, você concorda em pagar integralmente o valor especificado.</p>
            <p>2.2 As transações são processadas através de métodos seguros, e todas as informações financeiras são tratadas com confidencialidade.</p>
            <br>
            <p><b>Entrega e Devolução:</b></p>
            <p>3.1 Esforçamo-nos para garantir entregas pontuais, mas não nos responsabilizamos por atrasos decorrentes de eventos fora do nosso controle.</p>
            <p>3.2 Consulte nossa política de devolução para informações sobre trocas e reembolsos.</p>
            <br>
            <p><b>Conta do Usuário:</b></p>
            <p>4.1 Você é responsável por manter a segurança de sua conta e senha.</p>
            <p>4.2 Notifique-nos imediatamente sobre qualquer uso não autorizado de sua conta.</p>
            <br>
            <p><b>Conteúdo do Usuário:</b></p>
            <p>5.1 Ao enviar conteúdo para o FashionMoon, você concede permissão para a exibição e uso desse conteúdo no âmbito do site.</p>
            <p>5.2 Não é permitido enviar conteúdo difamatório, obsceno, ou violar os direitos de propriedade intelectual de terceiros.
            </p><br>
            <p><b>Privacidade:</b></p>
            <p>6.1 Nossa Política de Privacidade descreve como suas informações pessoais são coletadas, utilizadas e protegidas. Ao utilizar o FashionMoon, você concorda com as práticas descritas nesta política.</p>
            <br>
            <p><b>Alterações nos Termos:</b></p>
            <p>7.1 Reservamo-nos o direito de modificar estes Termos de Uso a qualquer momento. As alterações entrarão em vigor após a publicação no site.</p>
            <p>7.2 É responsabilidade do usuário revisar regularmente os Termos de Uso.</p>
            <br>
            <p><b>Rescisão:</b></p>
            <p>8.1 Reservamo-nos o direito de rescindir ou suspender sua conta a qualquer momento, por qualquer motivo, sem aviso prévio.</p>
            <br>
            <p><b>Contato:</b></p>
            <p>9.1 Qualquer dúvida ou preocupação sobre estes Termos de Uso pode ser direcionada para nossa equipe de suporte através dos canais de contato fornecidos no site.</p>
            <br>
            <p><b>Ao utilizar o FashionMoon, você concorda e aceita estes Termos de Uso. Obrigado por escolher o FashionMoon para suas compras de moda!</b></p>

           <center><a href="home.php" class="btn btn-outline-dark text-center">Voltar a pagina inicial</a></center> 

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




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="./js/formatacoes.js"></script>
    <script src="./js/js.js"></script>
</body>

</html>