<?php
$tabela = $pdo->query("SELECT a.idaluno, a.nome, a.nascimento, a.ativo, g.genero FROM tbaluno a INNER JOIN tbgenero g ON a.idgenero = g.idgenero")->fetchAll();
if (isset($_POST['name']) && isset($_POST['born']) && isset($_POST['gender'])) {
  $genero = $_POST['gender'];
  $nome = $_POST['name'];
  $nascimento = $_POST['born'];
  $register = "INSERT INTO tbaluno (idgenero, nome, nascimento) VALUES (:genero, :nome, :nascimento)";
  $insert = $pdo->prepare($register);
  $insert->bindParam(':genero', $genero);
  $insert->bindParam(':nome', $nome);
  $insert->bindParam(':nascimento', $nascimento);
  $pdo->beginTransaction();
  $insert->execute();
  $pdo->commit();
}
?>
<div class="container mt-3">
  <div class="card">
    <div class="card-header" style="background-color: rgb(25, 25, 25)">
      <div style="margin-left: 46%; display: flex; justify-content: space-between">
        <h3>#aluno</h3>
        <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#alunoRegistro">Registrar</button>
      </div>
    </div>
    <div class="card-body text-center">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Gênero</th>
            <th scope="col">Nascimento</th>
            <th scope="col">Ativo</th>
            <th scope="col" class="me-2">Ações</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
          <?php foreach ($tabela as $resultItem) {
            $id = $resultItem['idaluno'];
            $nome = $resultItem['nome'];
            $genero = $resultItem['genero'];
            $nascimento = $resultItem['nascimento'];
            $ativo = $resultItem['ativo'];
          ?>
            <tr>
              <td><?php echo ($id) ?></td>
              <td><?php echo ($nome) ?></td>
              <td><?php echo ($genero) ?></td>
              <td><?php echo ($nascimento) ?></td>
              <td><?php echo ($ativo) ?></td>
              <td><button data-bs-toggle="modal" data-bs-target="#alunoUpdate" type="submit" class="btn btn-outline-primary me-2">Alterar</button><a class="btn btn-outline-danger me-2" href="./querys/delete.php?id=<?php echo ($id); ?>">Excluir</a></td>
            </tr><?php
                }?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="modal fade" id="alunoRegistro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> <!-- Modal -->
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="./querys/register.php" method="post">
        <div class="modal-body">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12 mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name" required="required">
              </div>
              <div class="col-md-6">
                <label for="bogenderrn" class="form-label">Nascimento</label>
                <input type="date" class="form-control" id="born" name="born" required="required">
              </div>
              <div class="col-md-6">
                <label for="gender" class="form-label">Gênero</label>
                <select id="gender" name="gender" class="form-select" aria-label="Default select example">
                  <option value="1">Masculino</option>
                  <option value="2">Feminino</option>
                  <option value="3" selected>Neutro</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="modal fade" id="alunoUpdate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> <!-- Modal -->
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="./querys/update.php?id=<?php echo $id; ?>" method="post">
        <div class="modal-body">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12 mb-3">
                <label for="nameUP" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nameUP" name="nameUP" required="required">
              </div>
              <div class="col-md-4">
                <label for="bornUP" class="form-label">Nascimento</label>
                <input type="date" class="form-control" id="bornUP" name="bornUP" required="required">
              </div>
              <div class="col-md-4">
                <label for="active" class="form-label">Gênero</label>
                <select id="active" name="active" class="form-select" aria-label="Default select example">
                  <option value="A" selected>Ativo</option>
                  <option value="D">Desativo</option>
                </select>
              </div>
              <div class="col-md-4">
                <label for="genderUP" class="form-label">Gênero</label>
                <select id="genderUP" name="genderUP" class="form-select" aria-label="Default select example">
                  <option value="1">Masculino</option>
                  <option value="2">Feminino</option>
                  <option value="3" selected>Neutro</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <form action="./querys/update.php" method="post"></form>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>