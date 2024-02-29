<?php
if (isset($_SESSION['cargo'])) {
  $cargo = $_SESSION['cargo'];
} else {
  $cargo = 'ata';
}
include_once('bd.php');
if (isset($_POST['gameName']) && isset($_POST['gameName']) && isset($_POST['gameName']) && isset($_POST['gameName'])) {
  $nomeJogo = $_POST['gameName'];
  $desenvolvedora = $_POST['developer'];
  $distribuidora = $_POST['publisher'];
  $foto = $_POST['gamePhoto'];
  addGame($nomeJogo, $desenvolvedora, $distribuidora, $foto, 'A');
}
?>
<div class="container mt-3">
  <div class="card">
    <div class="card-header" style="background-color: rgb(25, 25, 25)">
      <div style="margin-left: 46%; display: flex; justify-content: space-between">
        <h3>#jogos</h3>
        <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#cadastrinho">Registrar</button>
      </div>
    </div>
    <div class="card-body text-center">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Desenvolvedora</th>
            <th scope="col">Distribuidora</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
          
          <?php
          $id = 0;
          foreach ($game as $itemGame) {
            $id = $id + 1;
            $nomeJogo = $itemGame['gameName'];
            $desenvolvedora = $itemGame['developer'];
            $distribuidora = $itemGame['publisher'];
          ?>
            <tr>
              <td><?php echo $id ?></td>
              <td><?php echo $nomeJogo ?></td>
              <td><?php echo $desenvolvedora ?></td>
              <td><?php echo $distribuidora ?></td>
              <td><a class="btn btn-outline-primary me-2">Alterar</a><a href="dashboard.php?page=adm" class="btn btn-outline-danger" <?php if (isset($cargo)) {
                                                                                                                                                  if ($cargo == 'Usuário'){
                                                                                                                                                    echo 'style="display: none"';
                                                                                                                                                  }
                                                                                                                                                } ?>>Excluir</a></td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
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
      <form action="dashboard.php?page=adm" method="post">
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