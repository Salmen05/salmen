<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fashion Moon</title>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  
  <link rel="icon" type="image/png" sizes="16x16"  href="img/favicons/favicon-16x16.png">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">

  <script src="./js/script.js" defer></script>
</head>

<body style="background-image: url('./img/loginphoto.jpg');background-size: cover;background-repeat: no-repeat;">
  <div class="container-fluid" width="100%">
    <div class="row">
      <div class="card col-md-4 sm-1 bg-white card left" height="200%">
        <br>
        <h1 class="h1index"> Seja Bem-Vindo</h1>
        <hr>
        <form>
          <div class="input-container">
            <label class="label" for="impemail">Email :</label>
            <input class="input" type="email" id="impemail" name="impemail">
          </div>
          <div class="input-container">
            <label class="label" for="impsenha">Senha :</label>
            <input class="input" type="password" id="impsenha" name="impsenha">
          </div>
          <div class="alert alert-light" role="alert" style="display: none" id="log" name="log">A simple light alert—check it out!</div>
          <div id="cu"></div>
          <div class="checkbox-container">
            <input type="checkbox" id="remember-me" name="remember-me">
            <label for="remember-me">Continuar conectado</label>
          </div>
          <center><button type="button" class="custom-button imgf" onclick="fazerLogin()">Entrar</button></center>
          <hr>
        </form>
        <a href="#" style="color:black">Esqueceu a senha ?</a>
        <center>
          <h4 style="color:gray">ou</h4>
        </center>
        <div class="button-container">
          <div class="row mb-3">
            <div class="col-md-12 sm-1">
              <center><a href="https://accounts.google.com/v3/signin/identifier?authuser=0&continue=https%3A%2F%2Fmyaccount.google.com%2F&ec=GAlAwAE&hl=pt_BR&service=accountsettings&flowName=GlifWebSignIn&flowEntry=AddSession&dsh=S2098178236%3A1708663691917016&theme=glif " target="_blank" class="btn btn-block btn-google imgf" style="border-color: black;width:40%"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                    <path d="M15.545 6.558a9.4 9.4 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.7 7.7 0 0 1 5.352 2.082l-2.284 2.284A4.35 4.35 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.8 4.8 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.7 3.7 0 0 0 1.599-2.431H8v-3.08z" />
                  </svg>ㅤ Continue com Google <i class="fab fa-google"></i></a></center>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-12 sm-1">
              <center><a href="https://appleid.apple.com" class="btn btn-block btn-apple imgf" target="_blank" style="border-color: black;width:40%">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" fill="currentColor" class="bi bi-apple" viewBox="0 0 16 16">
                    <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516s1.52.087 2.475-1.258.762-2.391.728-2.43m3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422s1.675-2.789 1.698-2.854-.597-.79-1.254-1.157a3.7 3.7 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56s.625 1.924 1.273 2.796c.576.984 1.34 1.667 1.659 1.899s1.219.386 1.843.067c.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758q.52-1.185.473-1.282" />
                    <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516s1.52.087 2.475-1.258.762-2.391.728-2.43m3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422s1.675-2.789 1.698-2.854-.597-.79-1.254-1.157a3.7 3.7 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56s.625 1.924 1.273 2.796c.576.984 1.34 1.667 1.659 1.899s1.219.386 1.843.067c.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758q.52-1.185.473-1.282" />
                  </svg>ㅤㅤContinue com Apple <i class="fab fa-apple"></i></a></center>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-12 sm-1">
              <center><a href="https://www.facebook.com" class="btn btn-block btn-facebook imgf" target="_blank" style="border-color: black;width:40%"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                  </svg> Continue com Facebook <i class="fab fa-facebook-f"></i></a></center>
            </div>
          </div>
          <center><a href="cadastro.php" style="color:black">Não possui uma conta ? <b>Cadastre-se</b></a>
          </center>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  <?php
  if (isset($_GET['cad'])) {
    $foi = $_GET['cad'];
    if ($foi == 'sucesso') {
  ?><script defer>
        window.alert("Cadastro efetuado com sucesso!");
        window.alert("Agora, basta fazer login novamente!");
      </script><?php
              }
            }
                ?>
</body>

</html>