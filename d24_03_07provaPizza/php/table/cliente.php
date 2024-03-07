<?php
$conn = connection();
?>
<div style="display: flex; justify-content: end;" class="mt-3">
  <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#cadastrar">Registrar</button>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">CPF</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $select = $conn->prepare("SELECT idcliente, cpf FROM tbcliente");
    $conn->beginTransaction();
    $select->execute();
    $conn->commit();
    foreach ($select as $table) {
      $idcliente = $table['idcliente'];
      $cpf = $table['cpf']
    ?>
      <tr>
        <th scope="row"><?php echo ("$idcliente") ?></th>
        <td><?php echo ("$cpf") ?></td>
      </tr>
    <?php
    }
    ?>
  </tbody>
</table>

<!-- Modal -->
<form action="./query/insert.php" method="POST">
  <div class="modal fade" id="cadastrar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Adicionar cliente</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12 mb-3">
              <label for="cpf">Digite o seu CPF:</label>
              <input type="text" class="form-control" id="cpfAdm" name="cpfAdm" placeholder="Digite seu CPF" aria-label="Email" required="required">
            </div>
            <div class="col-md-12 mb-3">
              <label for="senha">Insira sua senha:</label>
              <input type="password" class="form-control" id="passwordAdm" name="passwordAdm" placeholder="Senha" aria-label="Senha" required="required">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
      </div>
    </div>
  </div>
</form>