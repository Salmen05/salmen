<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Produto</th>
      <th scope="col">Tamanho</th>
      <th scope="col">Valor</th>
      <th scope="col">Cor</th>
      <th scope="col">Gênero</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $select = listarTabela('idproduto, foto, produto, tamanho, descricao, valor, cor, genero', 'produto', 'idproduto');
    if ($select != "Vazio") {
      foreach ($select as $ob) {
        $idproduto = $ob->idproduto;
        $foto = $ob->foto;
        $produto = $ob->produto;
        $tamanho = $ob->tamanho;
        $descricao = $ob->descricao;
        $valor = $ob->valor;
        $cor = $ob->cor;
        $genero = $ob->genero;
    ?>
        <tr>
          <th scope="row">
            <?php echo ($idproduto) ?>
          </th>
          <td>
            <?php echo ($produto) ?>
          </td>
          <td>
            <?php echo ($tamanho) ?>
          </td>
          <td>
            <?php echo ($valor) ?>
          </td>
          <td>
            <?php echo ($cor) ?>
          </td>
          <td>
            <?php echo ($genero) ?>
          </td>
          <td>
            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
              <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#vermaisprod<?php echo $idproduto ?>">Ver+</button>
              <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#alteprod<?php echo $idproduto ?>">Alterar</button>
              <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#excluirprod6<?php echo $idproduto ?>">Exluir</button>
            </div>
          </td>
        </tr>
        <!-- Modal-vermais-->
        <div class="modal fade" id="vermaisprod<?php echo $idproduto ?>" tabindex="-1" aria-labelledby="vermaisprod" aria-hidden="true">
          <div class="modal-dialog ">
            <div class="modal-content">
              <div class="modal-header bg-dark text-white">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Ver Mais</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p><b>ID: </b>
                  <?php echo ($idproduto) ?>
                </p>
                <p><b>Produto: </b>
                  <?php echo ($produto) ?>
                </p>
                <p><b>Tamanho: </b>
                  <?php echo ($tamanho) ?>
                </p>
                <p><b>Descrição: </b>
                  <?php echo ($descricao) ?>
                </p>
                <p><b>Valor: </b>
                  <?php echo ($valor) ?>
                </p>
                <p><b>Cor: </b>
                  <?php echo ($cor) ?>
                </p>
                <p><b>Gênero: </b>
                  <?php echo ($genero) ?>
                </p>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal-exluir-->
        <div class="modal fade" id="excluirprod<?php echo $idproduto ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header text-white bg-dark">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir Produto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body text-danger">
                <h5>Tem certeza que deseja excluir??!</h5>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                <a href="delete.php?idproduto=<?php echo $idproduto ?>" class="btn btn-danger">Sim</a>
              </div>
            </div>
          </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="alteprod<?php echo $idproduto ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header text-white bg-dark">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Alterar Produto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="update.php" method="post">
                  <div class="mb-3">
                    <input type="text" class="form-control d-none" id="impidprod" name="impidprod" value="<?php echo $idproduto ?>">
                  </div>
                  <div class="mb-3">
                    <label for="impfotoprod" class="form-label">Foto:</label>
                    <input class="form-control" id="impfotoprod" name="impfotoprod" type="file" value="<?php echo $foto ?>">
                  </div>
                  <div class="mb-3">
                    <label for="impprodprod" class="form-label">Produto:</label>
                    <input type="text" class="form-control" id="impprodprod" name="impprodprod"  value="<?php echo $produto ?>">
                  </div>
                  <div class="mb-3">
                    <label for="imptamprod" class="form-label">Tamanho:</label>
                    <input type="text" class="form-control" id="imptamprod" name="imptamprod" value="<?php echo $tamanho ?>">
                  </div>
                  <div class="mb-3">
                    <label for="impdescprod" class="form-label">Descricao:</label>
                    <input type="text" class="form-control" id="impdescprod" name="impdescprod" value="<?php echo $descricao ?>">
                  </div>
                  <div class="mb-3">
                    <label for="impvalorprod" class="form-label">Valor:</label>
                    <input type="number" class="form-control" id="impvalorprod" name="impvalorprod" value="<?php echo $valor ?>">
                  </div>
                  <div class="mb-3">
                    <label for="impcorprod" class="form-label">Cor:</label>
                    <input type="text" class="form-control" id="impcorprod" name="impcorprod" value="<?php echo $cor ?>">
                  </div>
                  <div class="mb-3">
                    <label for="impgeneprod" class="form-label">Genero:</label>
                    <input type="text" class="form-control" id="impgeneprod" name="impgeneprod" value="<?php echo $genero ?>">
                  </div>

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
    }
    ?>
  </tbody>
</table>