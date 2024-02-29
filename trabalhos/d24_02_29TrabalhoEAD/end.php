<?php
include_once("config/conexao.php");
include_once("config/constantes.php");
include_once("func/funcoes.php");
$conn = conectar();
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID Endereço</th>
      <th scope="col">ID Usuário</th>
      <th scope="col">Rua</th>
      <th scope="col">Bairro</th>
      <th scope="col">Cidade</th>
      <th scope="col">UF</th>
      <th scope="col">Número</th>
      <th scope="col">CEP</th>
      <th scope="col">Ativo</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php

    $select = "SELECT e.idendereco, e.idusuario, u.nome, e.rua, e.bairro, e.cidade, e.uf, e.numero, e.complemento, e.cep, e.ativo FROM endereco e INNER JOIN usuario u ON e.idusuario = u.idusuario";
    $select = $conn->prepare($select);
    $conn->beginTransaction();
    $select->execute();
    $conn->commit();
    foreach ($select as $tabela) {
      $idEndereço = $tabela['idendereco'];
      $idUsuario = $tabela['idusuario'];
      $nome = $tabela['nome'];
      $rua = $tabela['rua'];
      $bairro = $tabela['bairro'];
      $cidade = $tabela['cidade'];
      $uf = $tabela['uf'];
      $numero = $tabela['numero'];
      $complemento = $tabela['complemento'];
      $cep = $tabela['cep'];
      $ativo = $tabela['ativo'];
    ?>
      <tr>
        <th scope="row"><?php echo ($idEndereço); ?></th>
        <td scope="row"><?php echo ('<b>' . $idUsuario . '</b>'); ?></td>
        <td><?php echo ($rua); ?></td>
        <td><?php echo ($bairro); ?></td>
        <td><?php echo ($cidade); ?></td>
        <td><?php echo ($uf); ?></td>
        <td><?php echo ($numero); ?></td>
        <td><?php echo ($cep); ?></td>
        <td><?php echo ($ativo); ?></td>
        <td>
          <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#vermaiend<?php echo $idEndereço ?>">Ver+</button>
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#alteend<?php echo $idEndereço ?>">Alterar</button>
            <button  type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#excluirend<?php echo $idEndereço ?>">Exluir</button>
          </div>
        </td>
      </tr>
      <!-- Modal -->
      <div class="modal fade" id="vermaiend<?php echo $idEndereço ?>" tabindex="-1" aria-labelledby="vermaisprod" aria-hidden="true">
        <div class="modal-dialog ">
          <div class="modal-content">
            <div class="modal-header bg-dark text-white">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Ver Mais</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p><b>ID: </b>
                <?php echo ($idEndereço) ?>
              </p>
              <p><b>Endereço do: </b>
                <?php echo ($nome) ?>
              </p>
              <p><b>Rua: </b>
                <?php echo ($rua) ?>
              </p>
              <p><b>bairro: </b>
                <?php echo ($bairro) ?>
              </p>
              <p><b>Cidade: </b>
                <?php echo ($cidade) ?>
              </p>
              <p><b>UF: </b>
                <?php echo ($uf) ?>
              </p>
              <p><b>Numero: </b>
                <?php echo ($numero) ?>
              </p>
              <p><b>Complemento: </b>
                <?php echo ($complemento) ?>
              </p>
              <p><b>CEP: </b>
                <?php echo ($cep) ?>
              </p>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal-exluir-->
      <div class="modal fade" id="excluirend<?php echo $idEndereço ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header text-white bg-dark">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir Endereço</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-danger">
              <h5>Tem certeza que deseja excluir??!</h5>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
              <a href="delete.php?idEndereço=<?php echo $idEndereço ?>" class="btn btn-danger">Sim</a>
            </div>
          </div>
        </div>
      </div>



      <!-- Modal -->
      <div class="modal fade" id="alteend<?php echo $idEndereço ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header text-white bg-dark">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Alterar Endereço</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="update.php" method="post">
                <div class="mb-3">
                  <input type="text" class="form-control d-none" id="impendeend" name="impendeend" value="<?php echo $idEndereço ?>">
                </div>
                <div class="mb-3">
                  <label for="impruaend" class="form-label">Rua:</label>
                  <input type="text" class="form-control" id="impruaend" name="impruaend" value="<?php echo ($rua) ?>">
                </div>
                <div class="mb-3">
                  <label for="impbaiend" class="form-label">Bairro:</label>
                  <input type="text" class="form-control" id="impbaiend" name="impbaiend" value=" <?php echo ($bairro) ?>">
                </div>
                <div class="mb-3">
                  <label for="impcidend" class="form-label">Cidade:</label>
                  <input type="text" class="form-control" id="impcidend" name="impcidend" value="<?php echo ($cidade) ?>">
                </div>
                <div class="mb-3">
                  <label for="impufend" class="form-label">UF:</label>
                  <input type="text" class="form-control" id="impufend" name="impufend" value="<?php echo ($uf) ?>">
                </div>
                <div class="mb-3">
                  <label for="impnumeend" class="form-label">Numero:</label>
                  <input type="number" class="form-control" id="impnumeend" name="impnumeend" value="<?php echo ($numero) ?>">
                </div>
                <div class="mb-3">
                  <label for="impcompend" class="form-label">Complemento:</label>
                  <input type="text" class="form-control" id="impcompend" name="impcompend" value="<?php echo ($complemento) ?>">
                </div>
                <div class="mb-3">
                  <label for="impcepend" class="form-label">CEP:</label>
                  <input type="text" class="form-control" id="impcepend" name="impcepend" value="<?php echo ($cep) ?>">
                </div>
                <label for="impativoend">Ativo:</label>
                <select class="form-select" aria-label="Default select example" id="impativoend" name="impativoend">
                  <option selected><?php
                                    if ($ativo == 'A') {
                                      $ativo = 'Ativado';
                                    } else {
                                      $ativo = 'Desativado';
                                    }
                                    echo $ativo; ?></option>
                  <?php if ($ativo == 'Ativado') { ?><option value="D">Desativado</option><?php } ?>
                  <?php if ($ativo == 'Desativado') { ?><option value="A">Ativado</option><?php } ?>
                </select>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success">Salvar Mudanças</a></button>
              </form>
            </div>
          </div>
        </div>
      </div>


    <?php
    }
    ?>
  </tbody>
</table>