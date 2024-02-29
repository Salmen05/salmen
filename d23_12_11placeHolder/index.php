<?php

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

<body style="background-image: url(./img/loginBackground.jpg); background-size: cover; background-attachment: fixed;">
  <div style="width: 100vw ; height: 100vh; background-color: rgba(0, 0, 0, 0.5)">
    <div style="display: flex; justify-content: center;">
      <div class="card" style="width: 30rem; margin-top: 15%; padding: 7px;">
        <div class="card-body">
          <form action="redirect.php" method="post">
            <div class="mb-3">
              <label for="name" class="form-label">Nome</label>
              <input type="text" class="form-control" id="name" name="name" required="required">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Senha</label>
              <input type="password" class="form-control" id="password" name="password" required="required">
            </div>
            <div style="display: flex; justify-content: end">
              <button type="submit" class="btn btn-primary">Logar</button>
            </div>
          </form>
        </div>
        <?php if (isset($_GET['page'])) {
          include_once('failed.php');
        } ?>
      </div>
    </div>
  </div>
</body>

</html>