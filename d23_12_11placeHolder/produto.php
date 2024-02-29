<?php
include_once('bd.php');
$cargo = $_SESSION['cargo'];
if (isset($_POST['gameName']) && isset($_POST['developer']) && isset($_POST['publisher']) && isset($_POST['gamePhoto'])) {
  $nomeJogo = $_POST['gameName'];
  $desenvolvedora = $_POST['developer'];
  $distribuidora = $_POST['publisher'];
  $foto = $_POST['gameName'];
  addGame($nomeJogo, $desenvolvedora, $distribuidora, $foto, 'A');
}
?>

<div class="container mt-3">
  <div class="card">
    <div class="card-header text-center" style="background-color: rgb(25, 25, 25);">
      <div style="margin-left: 46%; display: flex; justify-content: space-between">
        <h3>#jogos</h3>
        <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#cadastrinho"<?php if($cargo == 'Cliente'){
          echo'style="display: none"';
          echo var_dump($cargo);
        } ?>>Registrar</button>
      </div>
    </div>
    <div class="card-body">
      <div class="row">
        <?php
        foreach ($game as $itemGame) {
          $nome = $itemGame['gameName'];
          $desenvolvedora = $itemGame['developer'];
          $distribuidora = $itemGame['publisher'];
          $foto = $itemGame['photo'];
          $ativo = $itemGame['active'];
          if ($ativo == 'A') {
        ?>
            <div class="col-md-3 col-sm-6 mb-3">
              <div class="card">
                <img src="./img/cover/<?php echo $foto ?>.jpg" class="card-img-top" alt="...">
                <p class="mt-2 ms-1"><b>Nome: </b><?php echo $nome ?></p>
                <p class="ms-1"><b>Desenvolvedora: </b><?php echo $desenvolvedora ?></p>
                <p class="ms-1"><b>Distribuidora: </b><?php echo $distribuidora ?></p>
              </div>
            </div>
        <?php
          }
        }
        ?>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="cadastrinho" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">#cadastroJogo</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="dashboard.php?page=produto" method="post">
        <div class="modal-body">
          <div class="mb-3">
            <label for="gameName" class="form-label">Nome</label>
            <input type="text" class="form-control" id="gameName" name="gameName" required="required">
          </div>
          <div class="mb-3">
            <label for="developer" class="form-label">Desenvolvedora</label>
            <input type="text" class="form-control" id="developer" name="developer" required="required">
          </div>
          <div class="mb-3">
            <label for="publisher" class="form-label">Distribuidora</label>
            <input type="text" class="form-control" id="publisher" name="publisher" required="required">
          </div>
          <div class="mb-3">
            <label for="gamePhoto" class="form-label">Foto da capa</label>
            <input type="file" class="form-control" id="gamePhoto" name="gamePhoto" required="required">
          </div>
        </div>
        <div class="modal-footer">
          <div style="display: flex; justify-content: end;">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>