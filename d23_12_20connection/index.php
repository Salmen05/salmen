<?php
include_once('./php/connection.php')
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
  <link rel="stylesheet" href="./css/bootstrap.css">
</head>

<body>
  <div class="card" style="width: 30rem; margin-left: 38%; margin-top: 17%">
    <form action="./php/redirect.php" method="post">
      <div class="card-body">
        <div class="row">
          <div class="col-md-12 mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name">
          </div>
          <div class="col-md-12 mb-3">
            <label for="password" class="form-label">Senha</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>
        </div>
        <div class="d-flex justify-content-center">
          <a href="./php/forgot.php" class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Esquecei a senha</a>
        </div>
        <div class="d-flex" style="justify-content: end;">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </form>
    <div class="mt-2">
      <?php if (isset($_GET['page'])) {
        include_once('./php/failed.php');
      } ?>
    </div>
  </div>
</body>

</html>