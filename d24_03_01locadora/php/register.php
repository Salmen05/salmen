<?
session_start()
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastrar</title>
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/style.css">
  <script src="../js/bootstrap.js"></script>
</head>

<body style="display: flex; align-items: center; justify-content: center; height: 100vh; margin: 0;">
  <form method="POST" action="loginVerify">
    <div class="card" style="width: 30rem;">
      <h5 class="card-header" style="text-align: center;">Registre-se gratuitamente</h5>
      <div class="card-body">
        <div class="row">
          <div class="col-md-12 mb-3">
            <label for="email">Insira seu endereço de email:</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Email" aria-label="Email">
          </div>
          <div class="col-md-12 mb-2">
            <label for="password">Insira sua senha:</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Senha" aria-label="Senha">
          </div>
          <div>
            <input type="checkbox" class="form-check-input" id="accept" name="accept" required="required">
            <label for="accept">Aceito os termos de serviço</label>
          </div>
        </div>
        <div style="display: flex; justify-content: end">
          <button type="submit" class="btn btn-primary mt-3">Registrar</button>
        </div>
      </div>
    </div>
  </form>
</body>

</html>