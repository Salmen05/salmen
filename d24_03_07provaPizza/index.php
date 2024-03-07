<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pitsa</title>
  <link rel="stylesheet" href="./css/bootstrap.css">
  <link rel="stylesheet" href="./css/style.css">
  <script src="./js/bootstrap.js" defer></script>
  <script src="./js/script.js" defer></script>
</head>

<body>

  <body style="display: flex; align-items: center; justify-content: center; height: 100vh; margin: 0;">
    <div class="card" style="width: 30rem;">
      <h5 class="card-header" style="text-align: center;">Registre-se gratuitamente</h5>
      <div class="card-body">
        <div class="row">
          <div class="col-md-12 mb-3">
            <label for="cpf">Digite o seu CPF:</label>
            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite seu CPF" aria-label="Email" required="required">
          </div>
          <div class="col-md-12 mb-3">
            <label for="senha">Insira sua senha:</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Senha" aria-label="Senha" required="required">
          </div>
        </div>
        <div style="display: flex; justify-content: space-between ">
          <a href="./php/register.php" class="mt-4">Registre-se já!</a>
          <button type="button" class="btn btn-primary mt-3" onclick="login()">Logar</button>
        </div>
        <div class="alert alert-light mt-3" role="alert" style="display: none" id="log" name="log">A simple light alert—check it out!</div>
        <div id="tobias"></div>
      </div>
  </body>
</body>

</html>