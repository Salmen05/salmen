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
  <script src="../js/bootstrap.js"></script>,
  <script src="../js/script.js"></script>
</head>

<body style="display: flex; align-items: center; justify-content: center; height: 100vh; margin: 0;">
  <form action="./query/insert.php" method="POST">
    <div class="card" style="width: 30rem;">
      <h5 class="card-header" style="text-align: center;">Registre-se gratuitamente</h5>
      <div class="card-body">
        <div class="row">
          <div class="col-md-12 mb-3">
            <label for="password">Insira seu CPF:</label>
            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF" aria-label="CPF" required="required">
          </div>
          <div class="col-md-12 mb-3">
            <label for="password">Insira sua senha:</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Senha" aria-label="Senha" required="required">
          </div>
        </div>
        <div style="display: flex; justify-content: end">
          <button type="submit" class="btn btn-primary mt-3">Registrar</button>
        </div>
      </div>
  </form>
</body>

</html> 