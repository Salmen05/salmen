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
      <th scope="col">Sabor</th>
      <th scope="col">Tamanho</th>
      <th scope="col">Valor</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $select = $conn->prepare("SELECT idpizza, sabor, tamanho, valor, status FROM tbpizza");
    $conn->beginTransaction();
    $select->execute();
    $conn->commit();
    foreach ($select as $table) {
      $idpizza = $table['idpizza'];
      $sabor = $table['sabor'];
      $tamanho = $table['tamanho'];
      $valor = $table['valor'];
      $status = $table['status']
    ?>
      <tr>
        <th scope="row"><?php echo ($idpizza) ?></th>
        <td><?php echo ($sabor) ?></td>
        <td><?php echo ($tamanho) ?></td>
        <td><?php echo ($valor) ?></td>
        <td><button class="btn btn-primary me-3" data-bs-toggle="modal" data-bs-target="#alterar<?php echo ($idpizza) ?>">Alterar</button><button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?php echo ($idpizza) ?>">Deletar</button></td>
      </tr>
      <!-- Alterar -->
      <form action="../query/update.php">
        <div class="modal fade" id="alterar<?php echo ($idpizza) ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-12 mb-3">
                    <label for="cpf">Sabor:</label>
                    <input type="text" class="form-control" id="saborReg" name="saborReg" value="<?php echo($sabor) ?>" placeholder="Sabor da pizza" aria-label="sabor" required="required">
                  </div>
                  <div class="col-md-12 mb-3">
                    <label for="cpf">Tamanho:</label>
                    <input type="text" class="form-control" id="tamanhoReg" name="tamanhoReg" value="<?php echo($tamanho) ?>" placeholder="Tamanho da Pizza" aria-label="tamanho" required="required">
                  </div>
                  <div class="col-md-12 mb-3">
                    <label for="senha">Valor:</label>
                    <input type="number" class="form-control" id="valorReg" name="valorReg" value="<?php echo($valor) ?>" placeholder="Valor da pizza" aria-label="sabor" required="required">
                  </div>
                  <select class="form-select" name="status" id="status">  
                    <option selected value="<?php if ($status == 'A') {
                                              echo ('A');
                                            } else {
                                              echo ('I');
                                            } ?>"><?php
                                                  if ($status == 'A') {
                                                    $status = 'Ativo';
                                                  } else {
                                                    $status = 'Inativo';
                                                  }
                                                  echo $status; ?></option>
                    <?php if ($status == 'Ativo') { ?><option value="I">Inativo</option><?php } ?>
                    <?php if ($status == 'Inativo') { ?><option value="A">Ativo</option><?php } ?>
                  </select>

                </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="../php/query/update.php?idpizza=<?php echo ($idpizza) ?>" class="btn btn-primary">Alterar</a>
              </div>
            </div>
          </div>
        </div>
      </form>

      <!-- Delete -->
      <div class="modal fade" id="delete<?php echo ($idpizza) ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Você tem certeza?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <a href="../php/query/delete.php?idpizza=<?php echo ($idpizza) ?>" class="btn btn-danger">Delete</a>
            </div>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
  </tbody>
</table>

<!-- Modal Insert -->
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
              <label for="cpf">Sabor:</label>
              <input type="text" class="form-control" id="sabor" name="sabor" placeholder="Sabor da pizza" aria-label="sabor" required="required">
            </div>
            <div class="col-md-12 mb-3">
              <label for="cpf">Tamanho:</label>
              <input type="text" class="form-control" id="tamanho" name="tamanho" placeholder="Tamanho da Pizza" aria-label="tamanho" required="required">
            </div>
            <div class="col-md-12 mb-3">
              <label for="senha">Valor:</label>
              <input type="number" class="form-control" id="valor" name="valor" placeholder="Valor da pizza" aria-label="sabor" required="required">
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